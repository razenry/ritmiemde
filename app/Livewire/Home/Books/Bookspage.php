<?php

namespace App\Livewire\Home\Books;

use App\Models\Buku;
use Livewire\Component;

class Bookspage extends Component
{

    public $books = [];

    public function mount()
    {
        $this->books = Buku::withoutTrashed()->with('kategori')->get();
    }

    public function render()
    {
        return view('livewire.home.books.bookspage')->layout('livewire.layout.app', [
            'title' => 'Ritmi - Books',
        ]);
    }
}
