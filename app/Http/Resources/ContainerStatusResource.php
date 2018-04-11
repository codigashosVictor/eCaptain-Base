<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use App\ContainerStatus;

class ContainerStatusResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       //dd($this);
        return [
            'id' => $this->container->id,
            'number_on_island' => $this->container->number_on_island,
            'capacity' => $this->container->capacity,
            'island' => $this->container->island->id,
            'actual_weight' => $this->actual_weight,
            'last_updated'=>$this->updated_at,
        ];
    }
}
