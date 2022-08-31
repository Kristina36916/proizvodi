<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProizvodResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {   return [
        'id'=>$this->id,
        'naziv'=>$this->naziv,
        'opis'=>$this->opis,
        'cena'=>$this->cena,
        'rok'=>$this->rok,
        'created_at'=>$this->created_at->format('d/m/Y'),
        'updated_at'=>$this->updated_at->format('d/m/Y'),


    ];
    }
}
