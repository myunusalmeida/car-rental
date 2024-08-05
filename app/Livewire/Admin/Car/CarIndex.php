<?php

namespace App\Livewire\Admin\Car;

use App\Models\Car;
use Livewire\Attributes\Layout;
use Livewire\Component;

class CarIndex extends Component
{

    public function delete($id)
    {
        Car::find($id)->delete();
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.car.car-index', [
            'cars' => Car::all()
        ]);
    }
}
