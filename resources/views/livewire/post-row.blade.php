<tr @class(['archived' => $post->is_archived])>
    <td>{{ str($post->title)->words(3) }}</td>
    <td>{{ str($post->content)->limit(45) }}</td>
    <td>
        <button type="button" {{ $post->is_archived ? ($function = 'unarchive') : ($function = 'archive') }}
            wire:click='{{ $function }}' wire:confirm='Are you sure want to {{ $function }} this post?'>
            {{ $function }}
        </button>

        <button type="button" wire:click='$parent.delete({{ $post->id }})'
            wire:confirm='Are you sure want to delete this post?'>
            Delete
        </button>
    </td>
</tr>
