<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Counter App')]
class Counter extends Component
{
    public $count = 1;

    public function add()
    {
        $this->count += 1;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
