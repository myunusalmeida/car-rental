<?php

namespace App\Livewire\Admin;

use App\Models\Booking;
use Livewire\Attributes\Layout;
use Livewire\Component;

class HistoryIndex extends Component
{
    public $booking;

    public function mount()
    {
        $this->booking = Booking::whereIn('status', ['Completed', 'Cancelled', 'Failed'])->get();
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
        return view('livewire.admin.history-index');
    }
}
