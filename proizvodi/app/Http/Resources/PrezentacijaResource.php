<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PrezentacijaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap='prezentacija';
    public function toArray($request)
    {
        return [
            'naziv'=>$this->resource->naziv,
            'mesto'=>$this->resource->mesto,
            'vreme'=>$this->resource->vreme


        ];
    }
}
