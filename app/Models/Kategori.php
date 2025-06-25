<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
    use SoftDeletes;

    // add fillable
    protected $fillable = [
        'slug',
        'icon',
        'nama',
        'deskripsi',
    ];

    // add guarded
    protected $guarded = ['id'];
    // add hidden
    protected $hidden = ['created_at', 'updated_at'];

    protected $dates = [
        'deleted_at'
    ];

    public function bukus()
    {
        return $this->hasMany(Buku::class);
    }
}
