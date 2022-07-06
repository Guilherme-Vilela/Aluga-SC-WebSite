<?php

namespace App\Http\Controllers;

use App\Models\Furniture;
use App\Models\ImageImmobile;
use App\Models\Immobile;
use App\Models\ImmobileAdress;
use App\Models\Room;
use App\Models\RoomImmobile;
use App\Models\RoomImmobileFurniture;
use Illuminate\Http\Request;

class ImmobileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $immobile = new Immobile();
        $immobile->id = 1;
        return view("Home/index", ["immobile" => $immobile]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $rooms = Room::all();
        $furnitures = Furniture::all();
        return view("Immobile/create", ['rooms'=>$rooms, "furnitures"=>$furnitures]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Save Immobille 
        $immobile = new immobile();
        $immobile->name = $request->name_immobile;
        $immobile->type = $request->type_immobile;
        $immobile->capacity = 1;
        $immobile->user_id = $request->user_id;
        $immobile->value =  $request->value_immobile;
        $immobile->description = $request->description_immobile;
        $immobile->rules = $request->rules_immobile;
        $immobile->status = "ativo";
        $immobile->user_id = auth()->user()->id;
        $immobile->image = "";
        $immobile->save();
        // $immobile->addAddress();
        $immobile->addRooms($request->rooms_immobile);
        $immobile->addImage($request->file('image'));
        // $immobile->addfurniture($request->rooms_immobile);
        // $furnitures = explode(",", $request->coveniences_immobile);

        // Upload image
        if ($request->file('image')) {
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Immobile  $immobile
     * @return \Illuminate\Http\Response
     */
    public function show(Immobile $immobile)
    {
        return view("Immobile/show");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Immobile  $immobile
     * @return \Illuminate\Http\Response
     */
    public function edit(Immobile $immobile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Immobile  $immobile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Immobile $immobile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Immobile  $immobile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Immobile $immobile)
    {
        //
    }
}
