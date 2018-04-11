<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * @author RowerPulido
 */
class Island extends Model
{
    //
    protected $table ="islands";

    protected $fillable = ['name','capacity'];

    /**
     * Return all the containers who has the island
     */
    public function containers(){
        return $this->hasMany('App\Container');
    }

    public function containersStatus(){
        return $this->hasMany('App\ContainerStatus','container_id');
    }
}
