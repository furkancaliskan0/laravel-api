<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = [

        'name',
        'description',
    ];

    // Dichiaro la relazione per la Tabella Ponte "Movie"
    public function movies()
    {
        return $this->belongsToMany(Movies::class);
    }
}