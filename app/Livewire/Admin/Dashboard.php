<?php

namespace App\Livewire\Admin;

use App\Models\Booking;
use App\Models\Car;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Dashboard extends Component
{
    public $cars, $customers, $booking, $booking_count, $booking_income;

    public function change_status($id, $status)
    {
        $booking = Booking::find($id);
        $booking->status = $status;
        $booking->save();
        $this->mount();
    }

    public function delete($id)
    {
        $booking = Booking::find($id);
        $booking->delete();
        $this->mount();
    }

    public function mount()
    {
        $this->customers = User::count();
        $this->cars = Car::count();
        $this->booking_count = Booking::whereIn('status', ['Pending', 'Confirmed', 'In Progress', 'Completed'])->count();
        $this->booking_income = Booking::whereIn('status', ['Confirmed', 'In Progress', 'Completed'])->sum('total_price');
        $this->booking = Booking::whereIn('status', ['Pending', 'Confirmed', 'In Progress'])->get();
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
