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
    public static $wrap='proizvod';
    public function toArray($request)
    {   return [
        'id'=>$this->resource->id,
        'naziv'=>$this->resource->naziv,
        'opis'=>$this->resource->opis,
        'cena'=>$this->resource->cena,
        'rok'=>$this->resource->rok,
       


    ];
    }
}
