<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class IslandResource extends Resource
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
            'name' => $this->name,
            'capacity' => $this->capacity,
            'containers' => Container::collection($this->containers),
        ];
    }
}
