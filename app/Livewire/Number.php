<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Number extends Component
{
    public $globalNumber;

    public function mount() {
        $this->globalNumber = 0;
    }

    #[On('increment-number')]
    public function increment() {
        $this->globalNumber = $this->globalNumber + 1;
    }

    public function render()
    {
        return view('livewire.number');
    }
}
