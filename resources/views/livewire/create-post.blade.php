<div>
    <h2>Create Post</h2>

    <form wire:submit='save'>
        <label>
            <span>Title</span>
            <input type="text" wire:model='title'>
            @error('title')
                <em>{{ $message }}</em>
            @enderror
        </label>

        <label>
            <span>Content</span>
            <textarea wire:model='content'></textarea>
            <small>Words:
                <span x-text="$wire.content.split(' ').length"></span>
            </small>
            @error('content')
                <em>{{ $message }}</em>
            @enderror
        </label>

        <button type="submit">Save</button>
        <button type="button" x-on:click="$wire.title='', $wire.content=''">Clear</button>
    </form>
</div>
