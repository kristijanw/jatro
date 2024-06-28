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
    #[Rule('required|min:3|regex:/^[a-zA-Z,\ ]+$/')]
    public $name = '';

    #[Rule('required|min:3|regex:/^[a-zA-Z0-9,\.@ ]+$/')]
    public $email = '';

    #[Rule('required|regex:/^[a-zA-Z0-9,\.!?@ ]+$/|max:255')]
    public $content = '';

    #[Rule('accepted')]
    public $terms = false;

    #[Validate('required|mimes:pdf,docx|max:1024')]
    public $cvfile;

    #[Validate('nullable|mimes:pdf,docx|max:1024')]
    public $doc;

    private $cvfile_filename = null;
    private $doc_filename = null;

    public function save()
    {
        $this->validate();

        $this->cvfile_filename = $this->cvfile->getClientOriginalName();
        $this->cvfile->storeAs('documents', $this->cvfile_filename);

        if ($this->doc) {
            $this->doc_filename = $this->cvfile->getClientOriginalName();
            $this->doc->storeAs('documents', $this->doc_filename);
        }

        $dataForEmail = [
            'name' => $this->name,
            'email' => $this->email,
            'content' => $this->content,
            'terms' => $this->terms,
            'cvfile' => $this->cvfile_filename,
            'doc' => $this->doc_filename,
        ];

        // Mail::to('localho2020@gmail.com')->send(new OpenLetter($dataForEmail));

        $this->reset(['name', 'email', 'content', 'terms', 'cvfile', 'doc']);

        File::cleanDirectory(storage_path('app/livewire-tmp'));
    }
}
