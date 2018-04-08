<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @author RowerPulido
 */
class Container extends Model
{
    //
    protected $table = 'containers';

    protected $fillable = ['number_on_island','capacity','island_id'];

    /**
     * Return island who belongs the Container
     */
    public function island(){
        return $this->belongsTo('App\Island');
    }

    /**
     * REturns the status
     */
    public function containerStatus(){
        return $this->belongsTo('App\ContainerStatus');
    }
}
