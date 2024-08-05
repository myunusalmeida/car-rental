<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Counter extends Component
{
    public $count = 1;

    public function increment()
    {
        $this->count += 10;
    }

    public function decrement()
    {
        $this->count--;
    }

    // #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.counter');
    }
}
