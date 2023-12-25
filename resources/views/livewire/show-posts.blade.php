<div>
    <h2>Posts:</h2>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                @livewire('post-row', ['post' => $post], key($post->id))
            @endforeach
        </tbody>
    </table>
</div>
