<?php

namespace App\Observers;

use App\Models\Kategori;
use Illuminate\Support\Str;

class KategoriObserver
{
    /**
     * Handle the Kategori "created" event.
     */

    public function saving(Kategori $category): void
    {
        if (!$category->isDirty('nama')) {
            return;
        }

        $slug = Str::slug($category->nama);
        $originalSlug = $slug;
        $count = 1;

        // Cek jika slug sudah ada dan bukan milik record ini
        while (Kategori::where('slug', $slug)->where('id', '!=', $category->id)->exists()) {
            $slug = "{$originalSlug}-{$count}";
            $count++;
        }

        $category->slug = $slug;
    }

    public function created(Kategori $kategori): void
    {
        //
    }

    /**
     * Handle the Kategori "updated" event.
     */
    public function updated(Kategori $kategori): void
    {
        //
    }

    /**
     * Handle the Kategori "deleted" event.
     */
    public function deleted(Kategori $kategori): void
    {
        //
    }

    /**
     * Handle the Kategori "restored" event.
     */
    public function restored(Kategori $kategori): void
    {
        //
    }

    /**
     * Handle the Kategori "force deleted" event.
     */
    public function forceDeleted(Kategori $kategori): void
    {
        //
    }
}
