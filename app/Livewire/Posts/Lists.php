<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use \App\Models\Post;

class Lists extends Component
{
    public Post $post;

    public function render()
    {
        return view('livewire.posts.lists');
    }
}
