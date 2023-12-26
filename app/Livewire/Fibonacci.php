<?php

namespace App\Livewire;

use Livewire\Component;

class Fibonacci extends Component
{
    public $fibonacciNumbers = [0];

    public function makeFibonacciPattern()
    {
        count($this->fibonacciNumbers) === 1 ?
            $this->fibonacciNumbers[1] = 1 :
            $this->fibonacciNumbers[count($this->fibonacciNumbers)] =
            $this->fibonacciNumbers[count($this->fibonacciNumbers) - 1] +
            $this->fibonacciNumbers[count($this->fibonacciNumbers) - 2];
    }

    public function render()
    {
        return view('livewire.fibonacci');
    }
}
