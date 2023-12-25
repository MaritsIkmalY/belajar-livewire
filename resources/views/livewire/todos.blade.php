<div>
    <form wire:submit='addTodo'>
        <input type="text" wire:model='todo'>

        <button type="submit">add</button>
    </form>
    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>
