<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Form;
use Illuminate\Support\Facades\Auth;

class PostForm extends Form
{
    #[Rule(['required', 'min:3', 'max:255'])]
    public string $title = '';

    #[Rule(['required'])]
    public string $body = '';

    public function store()
    {
        $post = Auth::user()->posts()->create($this->validate());

        flash('Post created successfully');

        $this->reset();

        return $post;
    }
}
