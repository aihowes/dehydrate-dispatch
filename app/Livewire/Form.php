<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Toasts;
use App\Support\Toasts\Toast;

class Form extends Component
{
    public $test = 0;

    public function submit() {
        $this->test++;
    }

    public function render()
    {
        return view('livewire.form');
    }
}
