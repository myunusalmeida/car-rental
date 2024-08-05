<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

class CustomerIndex extends Component
{

    public $customers;

    public function mount()
    {
        $this->customers = User::where('roles', 'User')->get();
    }

    public function delete($id)
    {
        $customer = User::find($id);
        $customer->delete();
        $this->mount();
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.customer-index');
    }
}
