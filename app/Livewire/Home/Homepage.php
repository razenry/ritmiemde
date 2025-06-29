<?php

namespace App\Livewire\Home;

use Livewire\Component;

class Homepage extends Component
{
    public function render()
    {
        return view('livewire.home.homepage')->layout('livewire.layout.app', [
            'title' => 'Ritmi - Home',
        ]);
    }
}
