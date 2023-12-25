<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Calculator App')]
class Calculator extends Component
{
    public $number1;
    public $number2;
    private $result;

    public function additionNumber()
    {
        $this->result = $this->number1 + $this->number2;
        $this->resetTextField();
    }

    public function subtractionNumber()
    {
        $this->result = $this->number1 - $this->number2;
        $this->resetTextField();
    }

    public function multiplicationNumber()
    {
        $this->result = $this->number1 * $this->number2;
        $this->resetTextField();
    }

    public function divisionNumber()
    {
        $this->result = $this->number1 / $this->number2;
        $this->resetTextField();
    }

    public function resetTextField()
    {
        $this->reset('number1', 'number2');
    }

    public function render()
    {
        return view('livewire.calculator', [
            'result' => $this->result
        ]);
    }
}
