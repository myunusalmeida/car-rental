<?php

namespace App\Livewire\Home;

use App\Models\Booking;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Success extends Component
{
    public $booking;

    public function mount($id)
    {
        $this->booking = Booking::findOrFail($id);
    }

    #[Layout('layouts.home')]
    public function render()
    {
        return view('livewire.home.success');
    }
}
