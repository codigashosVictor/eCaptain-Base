<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @author RowerPulido
 */
class ContainerStatus extends Model
{
    //
    protected $table = 'containers_status';

    protected $fillable = ['actual_weight','container_id','dish_id'];

    /**
     * Returns container
     */
    public function container(){
        return $this->belongsTo('App\Container');
    }

    /**
     * Return dish
     */
    public function dish(){
        return $this->hasOne('App\Dish');
    }

}
