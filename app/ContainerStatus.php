<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @author RowerPulido
 */
class ContainerStatus extends Model
{
    //
    private $table = 'containers_status';

    private $fillable = ['actual_weight','container_id','dish_id'];

    /**
     * Returns container
     */
    public function container(){
        return $this->hasOne('App\Container');
    }

    /**
     * Return dish
     */
    public function dish(){
        return $this->hasOne('App\Dish');
    }
}
