<?php

namespace App\Livewire;

use App\Livewire\Forms\OpenLetterForm;
use Livewire\Component;
use Livewire\WithFileUploads;

class Openletter extends Component
{
    use WithFileUploads;

    public OpenLetterForm $form;

    public $show = false;

    public $sent = false;

    public function add()
    {
        $this->form->save();

        $this->sent = true;

        // $this->reset('show');
        // $this->dispatch('added');
    }

    public function render()
    {
        return view('livewire.openletter');
    }
}
