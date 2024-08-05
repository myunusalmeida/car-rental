<?php

namespace App\Livewire\Admin\Car;

use App\Models\Car;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class CarCreate extends Component
{
    use WithFileUploads;

    #[Validate('required')]
    public $brand, $model, $color, $production_year, $seats, $price, $status, $image;

    public function save()
    {
        $image = $this->image->storeAs('cars', Str::slug($this->brand) . '-' . date('Y-m-d-his') . '.jpg', 'public');
        Car::create([
            'brand' => $this->brand,
            'model' => $this->model,
            'color' => $this->color,
            'production_year' => $this->production_year,
            'seats' => $this->seats,
            'price' => $this->price,
            'image' => $image,
        ]);

        $this->redirectRoute('admin.daftar-mobil.index', navigate: true);
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.car.car-create');
    }
}
