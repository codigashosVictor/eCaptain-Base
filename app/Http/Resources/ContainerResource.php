<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ContainerResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'number_on_island' => $this->number_on_island,
            'capacity' => $this->capacity,
            'island' => $this->island
        ];
    }
}
