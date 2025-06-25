<?php

namespace App\Observers;

use App\Models\Buku;
use Illuminate\Support\Str;

class BukuObserver
{

    public function saving(Buku $buku): void
    {
        if (!$buku->isDirty('judul')) {
            return;
        }

        $slug = Str::slug($buku->judul);
        $originalSlug = $slug;
        $count = 1;

        // Cek jika slug sudah ada dan bukan milik record ini
        while (Buku::where('slug', $slug)->where('id', '!=', $buku->id)->exists()) {
            $slug = "{$originalSlug}-{$count}";
            $count++;
        }

        $buku->slug = $slug;
    }

    /**
     * Handle the Buku "created" event.
     */
    public function created(Buku $buku): void
    {
        //
    }

    /**
     * Handle the Buku "updated" event.
     */
    public function updated(Buku $buku): void
    {
        //
    }

    /**
     * Handle the Buku "deleted" event.
     */
    public function deleted(Buku $buku): void
    {
        //
    }

    /**
     * Handle the Buku "restored" event.
     */
    public function restored(Buku $buku): void
    {
        //
    }

    /**
     * Handle the Buku "force deleted" event.
     */
    public function forceDeleted(Buku $buku): void
    {
        //
    }
}
