<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use App\Island;
use App\Http\Resources\ContainersStatusResource;
use Illuminate\Support\Facades\DB;

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
            'containers' => new \App\Http\Resources\ContainersResource($this->containers),
        ];
    }

    /**
     * @todo make the logic to return the best seller of the island
     * @return ContainerStatus
     */
    public function bestSeller($islandId){
        $today = date_create();
        $s = Island::whereDate('updated_at', DB::raw('CURDATE()'))->get();
    }
    /**
     * @todo make logic to return the lest seller on the island
     * @return ContainerStatus
     */
    public function lestSeller($islandId){
        $today = date_create();
    }

    /**
     * @todo this function need to return the container more near to end it food
     * @return COntainerStatus
     */
    public static function nearToEnd($islandId){
        
    }
}
