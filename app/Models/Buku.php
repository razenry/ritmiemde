<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Buku extends Model
{
    use SoftDeletes;

    // add fillable
    protected $fillable = [
        'slug',
        'judul',
        'pengarang',
        'penerbit',
        'tahun_terbit',
        'bahasa',
        'sinopsis',
        'cover',
        'link',
        'kategori_id',
        'user_id',
    ];
    // add guaded
    protected $guarded = ['id'];
    // add hidden
    protected $hidden = ['created_at', 'updated_at'];

    protected $dates = [
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
