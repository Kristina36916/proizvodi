<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategorija extends Model
{
    use HasFactory;

    protected $fillable=[
        'naziv',
        'opis',
        'url',
        'prezentacija_id'
    ];

    public function proizvodi()
    {
        return $this->hasMany(Proizvod::class);
    }
    public function prezentacija()
    {
        return $this->hasMany(Prezentacija::class);
    }
    
}
