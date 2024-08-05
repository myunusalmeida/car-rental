<?php

namespace App\Livewire\Admin\Slider;

use App\Models\Slider;
use Livewire\Attributes\Layout;
use Livewire\Component;

class SliderIndex extends Component
{
    public $sliders;

    public function mount()
    {
        $this->sliders = Slider::all();
    }

    public function destroy($id)
    {
        Slider::find($id)->delete();
        $this->sliders = Slider::all();
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.slider.slider-index');
    }
}
