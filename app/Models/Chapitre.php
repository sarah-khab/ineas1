<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapitre extends Model
{
    use HasFactory;
    protected $table ="chapitres";
    public function grille(){
        return $this->belongsTo(Grille::class);

    }
}
