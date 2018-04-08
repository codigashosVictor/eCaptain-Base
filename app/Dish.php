<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * @author RowerPulido
 */
class Dish extends Model
{
    //
    protected $table = "dishes";

    protected $fillable = ['name'];   
    
    /**
     * Returns the ContainerStatus who belongs
     * */    
    public function containerStatus(){
        return $this->belognsTo('App\ContainerStatus');
    }
}
