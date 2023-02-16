<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $primaryKey = 'info_id';
    protected $fillable = [

        'name',
        'year',
        'cashOut',
    ];

    // Dichiaro la relazione indiretta tra "Movie" e "Genre"
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    // Dichiaro la relazione per la Tabella Ponte "Tag"
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}