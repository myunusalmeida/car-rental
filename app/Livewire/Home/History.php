<?php

namespace App\Livewire\Home;

use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class History extends Component
{
    public $histories;

    public function mount()
    {
        $this->histories = Booking::where('user_id', Auth::user()->id)->get();
    }

    #[Layout('layouts.home')]
    public function render()
    {
        return view('livewire.home.history');
    }
}
