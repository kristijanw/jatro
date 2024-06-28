<?php

namespace App\Livewire\Forms;

use App\Mail\OpenLetter;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class OpenLetterForm extends Form
{
    #[Rule('required|min:3')]
    public $name = '';

    #[Rule('required|min:3')]
    public $email = '';

    #[Rule('required|regex:/^[a-zA-Z0-9,\.!?@ ]+$/|max:255')]
    public $content = '';

    #[Rule('accepted')]
    public $terms = false;

    #[Validate('required|mimes:pdf,docx|max:1024')]
    public $cvfile;

    #[Validate('nullable|mimes:pdf,docx|max:1024')]
    public $doc;

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

        $filename = $this->cvfile->getClientOriginalName();
        $this->cvfile->storeAs('documents', $filename, 'public');

        // Post::create([
        //     'title' => $this->title,
        //     'content' => $this->content,
        // ]);

        Mail::to('localho2020@gmail.com')->send(new OpenLetter());

        $this->reset(['name', 'email', 'content', 'terms', 'cvfile', 'doc']);

        File::cleanDirectory(storage_path('app/livewire-tmp'));
    }
}
