<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ContainerStatus;

/**
 * @author RowerPulido
 */
class Container extends Model
{
    //
    protected $table = 'containers';

    protected $fillable = ['number_on_island','capacity','island_id'];

    /**
     * @return island who belongs the Container
     */
    public function island(){
        return $this->belongsTo('App\Island');
    }

    /**
     * @return the status
     */
    public function containerStatus(){
        return $this->hasMany('App\ContainerStatus');
    }
}
