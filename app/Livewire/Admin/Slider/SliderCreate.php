<?php

namespace App\Livewire\Admin\Slider;

use App\Models\Slider;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class SliderCreate extends Component
{
    use WithFileUploads;

    #[Validate('required')]
    public $image;

    public function save()
    {
        $image = $this->image->storeAs('sliders', date('Y-m-d-his') . '.jpg', 'public');
        Slider::create([
            'image' => $image
        ]);

        $this->redirectRoute('admin.slider.index', navigate: true);
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.slider.slider-create');
    }
}
