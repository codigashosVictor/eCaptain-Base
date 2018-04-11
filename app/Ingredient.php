<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * 
 * @author RowerPulido
 */
class Ingredient extends Model
{
    //
    protected $table = 'ingredients';

    protected $fillable = ['name'];
}
