<?php

namespace App\Livewire\Components\Ui;

use Livewire\Component;

class BookCard extends Component
{
    public $data;
    public function render()
    {
        return view('livewire.components.ui.book-card');
    }
}
