<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Island;
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
        return Island::find($id)->toArray();
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