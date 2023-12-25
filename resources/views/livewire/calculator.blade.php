<div>
    <h1>Kalkulator Sederhana Banget</h1>
    <input type="number" wire:model='number1'>
    <br>
    <input type="number" wire:model='number2'>
    <br>
    <button wire:click='additionNumber()'>+</button>
    <button wire:click='subtractionNumber()'>-</button>
    <button wire:click='multiplicationNumber()'>x</button>
    <button wire:click='divisionNumber()'>/</button>

    <p>Hasil : {{ $result }}</p>
</div>
