<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prezentacija extends Model
{
    use HasFactory;
    protected $fillable=[
        'naziv',
        'mesto',
        'trajanje',
        'url',

    ];
    public function kategorija(){
        return $this->belongsTo(Kategorija::class);
    }

}
