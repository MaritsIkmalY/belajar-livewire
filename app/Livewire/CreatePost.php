<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Create Post')]
class CreatePost extends Component
{
    public $title;

    public $content;

    protected $rules = [
        'title' => 'required',
        'content' => 'required'
    ];

    protected $messages = [
        'title.required' => 'Judul harus diisi terlebih dahulu',
        'content.required' => 'Konten harus diisi terlebih dahulu'
    ];

    public function save()
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content
        ]);

        $this->redirect('/posts', navigate : true);
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
