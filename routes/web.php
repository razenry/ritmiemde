<?php

use App\Livewire\Home\Books\Bookspage;
use App\Livewire\Home\Books\ViewBookPage;
use App\Livewire\Home\Homepage;
use Illuminate\Support\Facades\Route;

Route::get('/', Homepage::class)->name('home');
Route::get('/books', Bookspage::class)->name('books');
Route::get('/books/{slug}', ViewBookPage::class)->name('books.view');



