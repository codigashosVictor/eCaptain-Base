<?php

namespace App\Http\Controllers;

use App\ContainerStatus;
use Illuminate\Http\Request;

class ContainerStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = [];
        try{
            $cs = ['actual_weight'=> $request->input('actual_weight') ,
                'container_id'=>$request->input('container_id'),
                'dish_id'=>$request->input('dish_id')];
            $cs =ContainerStatus::create($cs);
            $response = ['STATUS'=>0,'MESSAGE'=>'SUCCESS','CONTAINER_STATUS'=>$cs->toArray()];
        }catch(Exception $ex){
            $response = ['STATUS'=>2,'MESSAGE'=>$ex->getMessage(),'CONTAINER_STATUS'=>$cs->toArray()];
        }finally{
            return $response;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContainerStatus  $containerStatus
     * @return \Illuminate\Http\Response
     */
    public function show(ContainerStatus $containerStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContainerStatus  $containerStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(ContainerStatus $containerStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContainerStatus  $containerStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContainerStatus $containerStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContainerStatus  $containerStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContainerStatus $containerStatus)
    {
        //
    }
}
