<?php

namespace App\Livewire\Home;

use App\Models\Booking;
use App\Models\Car;
use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Homepage extends Component
{
    public $sliders, $cars;

    #[Validate('required')]
    public $start_date, $end_date;

    public function mount()
    {
        $this->sliders = Slider::all();
        $this->cars = Car::all();
    }

    public function search()
    {
        $start_date = $this->start_date;
        $end_date = $this->end_date;

        $this->cars = Car::where('status', 'Available')
            ->whereDoesntHave('bookings', function ($query) use ($start_date, $end_date) {
                $query->where('start_date', '<=', $end_date)
                    ->where('end_date', '>=', $start_date);
            })->get();
    }

    public function booking($id)
    {
        $car = Car::find($id);
        $start_date = Carbon::parse($this->start_date);
        $end_date = Carbon::parse($this->end_date);

        $days = $start_date->diffInDays($end_date) + 1;
        $price_per_day = $car->price;
        $total_price = $days * $price_per_day;

        $booking = Booking::create([
            'user_id' => Auth::user()->id,
            'car_id' => $car->id,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'total_price' => $total_price,
            'status' => 'Pending'
        ]);

        return $this->redirectRoute('success', $booking->id, navigate: true);
    }

    #[Layout('layouts.home')]
    public function render()
    {
        return view('livewire.home.homepage');
    }
}
