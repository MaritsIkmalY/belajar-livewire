<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreatePost;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Attributes\Title;
use Livewire\Livewire;
use Tests\TestCase;

class CreatePostTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CreatePost::class)
            ->assertStatus(200);
    }

    /** @test */
    public function can_create_new_post()
    {
        $testTitle = 'Test Title 2';
        $contentTitle = 'Content Title 2';
        $post = Post::whereTitle($testTitle)->first();
        $this->assertNull($post);

        Livewire::test(CreatePost::class)
        ->set('title', $testTitle)
        ->set('content', $contentTitle)
        ->call('save');

        $post = Post::whereTitle($testTitle)->first();
        $this->assertNotNull($post);
        $this->assertEquals($testTitle, $post->title);
        $this->assertEquals($contentTitle, $post->content);
    }

    /** @test */
    public function title_is_required()
    {
        Livewire::test(CreatePost::class)
        ->set('title', '')
        ->call('save')
        ->assertHasErrors([
            'title' => 'required'
        ]);
    }

    /** @test */
    public function content_is_required()
    {
        Livewire::test(CreatePost::class)
        ->set('content', '')
        ->call('save')
        ->assertHasErrors([
            'content' => 'required'
        ]);
    }
}
