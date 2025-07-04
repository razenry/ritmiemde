<?php

namespace App\Livewire\Layout;

use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.layout.navbar', [
            'categories' => \App\Models\Kategori::withoutTrashed()->get(),
        ]);
    }
}
