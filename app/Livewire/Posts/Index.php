<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use \App\Models\Post;
use Livewire\Attributes\On;
use Livewire\Attributes\Lazy;

#[Lazy]
class Index extends Component
{
    #[On('postCreated')]
    public function updateList($post)
    {}

    public function placeholder(){
        return view('livewire.posts.placeholder');
    }

    public function render()
    {
        // sleep(3);
        $posts = Post::query()->with('user')->latest()->get();
        return view('livewire.posts.index', [
            'posts' => $posts,
        ]);
    }
}
