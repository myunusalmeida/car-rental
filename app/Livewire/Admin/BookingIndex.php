<?php

namespace App\Livewire\Admin;

use App\Models\Booking;
use Livewire\Attributes\Layout;
use Livewire\Component;

class BookingIndex extends Component
{
    public $booking;

    public function mount()
    {
        $this->booking = Booking::whereIn('status', ['Pending', 'Confirmed', 'In Progress'])->get();
    }

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

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.booking-index');
    }
}
