<?php

namespace App\Livewire;

use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        return view('livewire.login');
    }
    public $showForm = false;

    public function getStarted()
    {
        $this->showForm = true;
    }
}
