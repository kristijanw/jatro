<?php

namespace App\Livewire;

use App\Livewire\Forms\OpenLetterForm;
use Livewire\Component;

class Openletter extends Component
{
    public OpenLetterForm $form;

    public $show = false;

    public function add()
    {
        $this->form->save();

        $this->reset('show');

        $this->dispatch('added');
    }

    public function render()
    {
        return view('livewire.openletter');
    }
}
