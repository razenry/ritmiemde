<?php

namespace App\Livewire\Home\Books;

use App\Models\Buku;
use Livewire\Component;

class ViewBookPage extends Component
{
    public $book;
    public $relatedBooks;

    public function mount($slug)
    {
        $this->book = Buku::withoutTrashed()
            ->where('slug', $slug)
            ->with('kategori')
            ->firstOrFail();
        $this->relatedBooks = Buku::where('pengarang', 'like', $this->book->pengarang)
            ->where('id', '!=', $this->book->id)
            ->limit(3)
            ->get();
    }
    public function render()
    {
        return view('livewire.home.books.view-book-page')->layout('livewire.layout.app', [
            'title' => 'Ritmi - ' . $this->book->judul,
        ]);
    }
}
