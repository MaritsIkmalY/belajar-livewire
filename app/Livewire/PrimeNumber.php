<?php

namespace App\Livewire;

use Livewire\Component;

class PrimeNumber extends Component
{
    public $number = 0;
    public $primeNumbers = [];
    public $tes = '$wire.primeNumbers.length';

    public function generatePrimeNumber()
    {
        $isGenerate = true;
        $bilangan = 1;
        while ($isGenerate) {
            if ($this->isPrime($bilangan))
                array_push($this->primeNumbers, $bilangan);
            $bilangan++;
            if (count($this->primeNumbers) == $this->number)
                 $isGenerate = false;
        }
    }

    protected function isPrime($number)
    {

        if ($number < 2)
            return false;
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i === 0)
                return false;
        }
        return true;
    }

    public function render()
    {
        return view('livewire.prime-number');
    }
}
