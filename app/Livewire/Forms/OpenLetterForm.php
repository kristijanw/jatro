<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class OpenLetterForm extends Form
{
    #[Rule('required|min:3')]
    public $name = '';

    #[Rule('required|min:3')]
    public $email = '';

    #[Rule('required')]
    public $content = '';

    // public Post $post;

    // public function setPost($post)
    // {
    //     $this->post = $post;
    //     $this->title = $post->title;
    //     $this->content = $post->content;
    // }

    public function save()
    {
        $this->validate();

        // Post::create([
        //     'title' => $this->title,
        //     'content' => $this->content,
        // ]);

        $this->reset(['name', 'email', 'content']);
    }
}
