<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proizvod extends Model
{
    use HasFactory;

    protected $fillable=[
        'naziv',
        'opis',
        'cena',
        'rok',
        'url',

    ];
    public function kategorija(){
        return $this->belongsTo(Kategorija::class,);
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
