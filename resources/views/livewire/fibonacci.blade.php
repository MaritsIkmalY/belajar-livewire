<div>
    <button type="button" wire:click='makeFibonacciPattern()'>fibonacci</button>
    @foreach ($fibonacciNumbers as $fibonacciNumber)
        <span>{{ $fibonacciNumber }}</span>
    @endforeach
</div>
