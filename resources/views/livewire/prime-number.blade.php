<div>
    <input type="number" wire:model='number'>
    <button type="button" wire:click='generatePrimeNumber()'>Generate</button>
    @php
        $alpine = count($primeNumbers) == 0 ? '$wire.number' : '$wire.primeNumbers.length';
    @endphp
    <small>Generate <span x-text="{{ $alpine }}"></span> Bilangan Prima</small>
    @foreach ($primeNumbers as $primeNumber)
        <li>{{ $primeNumber }}</li>
    @endforeach
</div>
