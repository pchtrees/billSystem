<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class DislikeButton extends Component
{
    public Post $post;

    public function toggleDislike()
    {
        if (auth()->guest()) {
            return $this->redirect(route('login'), true);
        }

        $user = auth()->user();

        if ($user->hasDisliked($this->post)) {
            $user->dislikes()->detach($this->post);
            return;
        }

        $user->dislikes()->attach($this->post);
    }

    public function render()
    {
        return view('livewire.dislike-button');
    }
}