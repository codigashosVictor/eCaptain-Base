<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use App\ContainerStatus;
use Illuminate\Support\Facades\DB;

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
            'island' => $this->island->id,
            'actual_status' => ContainerStatus::find(DB::table('containers_status')->where('id','=',$this->id)->orderBy('updated_at','desc')->first()->id),
            'last_status' => $this->containerStatus,
        ];
    }
}
