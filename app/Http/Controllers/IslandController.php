<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Island;
use App\Http\Resources\IslandResource;
/**
 * @author RowerPulido
 */
class IslandController extends Controller
{
    public function show($id){
        return Island::find($id)->toArray();
    }

    /**
     * @author RowerPulido
     * @return JSONObject 
     */
    public function status($id){
        return new IslandResource(Island::find($id));
    }
    
    /**
     * @author RowerPulido
     * @return JSONObject with the status
     */
    public function update(){

    }
    
    /**
     * @author RowerPulido
     * @return JSONObject with the status
     */
    public function store(){

    }
}