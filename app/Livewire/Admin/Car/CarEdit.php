<?php

namespace App\Livewire\Admin\Car;

use App\Models\Car;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;

class CarEdit extends Component
{
    use WithFileUploads;

    #[Validate('required')]
    public $brand, $model, $color, $production_year, $seats, $price, $status;

    public $car, $car_id, $image;

    public function mount($id)
    {
        $car = Car::find($id);
        $this->car_id = $car->id;
        $this->brand = $car->brand;
        $this->model = $car->model;
        $this->color = $car->color;
        $this->production_year = $car->production_year;
        $this->seats = $car->seats;
        $this->price = $car->price;
        $this->status = $car->status;
    }

    public function save()
    {
        if ($this->image != null) {
            $image = $this->image->storeAs('cars', Str::slug($this->brand) . '-' . date('Y-m-d-his') . '.jpg', 'public');
            Car::find($this->car_id)->update([
                'brand' => $this->brand,
                'model' => $this->model,
                'color' => $this->color,
                'production_year' => $this->production_year,
                'seats' => $this->seats,
                'price' => $this->price,
                'status' => $this->status,
                'image' => $image,
            ]);
        } else {
            Car::find($this->car_id)->update([
                'brand' => $this->brand,
                'model' => $this->model,
                'color' => $this->color,
                'production_year' => $this->production_year,
                'seats' => $this->seats,
                'price' => $this->price,
                'status' => $this->status
            ]);
        }

        $this->redirectRoute('admin.daftar-mobil.index', navigate: true);
    }

    #[Layout('layouts.admin')]

    public function render()
    {
        return view('livewire.admin.car.car-edit');
    }
}
