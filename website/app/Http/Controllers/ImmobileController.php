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
use Illuminate\Support\Facades\DB;

class ImmobileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        
        $local = "%%";
        $capacity = 0;
        $check_in = "2022-01-01";
        $check_out = "2022-01-02";
        $immobiles = [];
        if (!empty($request->query('para_onde'))) {
            
            $local = "%" . $request->query('para_onde') . "%";
        }
        if (!empty($request->query('pessoas'))) {
            $capacity = $request->query('pessoas');
        }
        if (!empty($request->query('check_in'))) {
            $check_in = $request->query('check_in')."";
        }
        if (!empty($request->query('check_out'))) {
            $check_out = $request->query('check_out')."";
        }
        DB::enableQueryLog();
        $immobiles_ = DB::select(
            'select immobiles.* FROM immobiles 
            JOIN immobile_adresses ON immobiles.id = immobile_adresses.immobile_id
            LEFT JOIN schedules ON immobiles.id = schedules.immobile_id
            WHERE city LIKE "' . $local . '" AND capacity >= ' . $capacity . ' 
            AND (check_in NOT BETWEEN  "' . $check_in . '" AND "' . $check_out . '" or (schedules.immobile_id IS NULL))
            AND (check_out NOT BETWEEN "' . $check_in . '"AND"' . $check_out . '" or (schedules.immobile_id IS NULL)) LIMIT 20'
        );

        
        foreach ($immobiles_ as $immobile_array) {
            $immobile = new Immobile;
            $immobile->id = $immobile_array->id;
            $immobile->name = $immobile_array->name;
            $immobile->type = $immobile_array->type;
            $immobile->capacity =  $immobile_array->capacity;
            $immobile->user_id = $immobile_array->user_id;
            $immobile->value =  $immobile_array->value;
            $immobile->description = $immobile_array->description . "";
            $immobile->rules = $immobile_array->rules . "";
            $immobile->status = $immobile_array->status;
            $immobile->image = "";
            array_push($immobiles, $immobile);
            unset($immobile);
        }   
        if(count($immobiles) <= 0){
            session()->put(['text' =>['msg' => "Nenhum imóvel encontrado"]]);
        }
        return view("Home/index", ["immobiles" => $immobiles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rooms = Room::where('status', 'comodo')->get();
        $furnitures = Furniture::where('status', 'conveniencia')->get();

        return view("Immobile/create", ['rooms' => $rooms, "furnitures" => $furnitures]);
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
        $immobile->capacity =  $request->quantity_people;
        $immobile->user_id = $request->user_id;
        $immobile->value =  str_replace(",", '.', str_replace('.', '', $request->value_immobile));
        $immobile->description = $request->description_immobile . "";
        $immobile->rules = $request->rules_immobile . "";
        $immobile->status = "ativo";
        $immobile->user_id = auth()->user()->id;
        $immobile->image = "";
        $immobile->save();

        $address = [
            "road" => $request->road,
            "city" => $request->city,
            "district" => $request->district,
            "state" => $request->state,
            "cep" => $request->cep,
            "number" => $request->number,
            "complement" => $request->complement,
        ];

        $room = [
            'bathrooms' => $request->bathrooms_immobile,
            'bedrooms' => $request->bathrooms_immobile,
        ];
        $furniture = [
            'double_bed' => $request->double_bed,
            'single_bed' => $request->single_bed,
            'couch' => $request->couch,
        ];

        $immobile->addAddress($address);
        $immobile->addRooms($room, $request->rooms_immobile);
        $immobile->addFurniture($furniture, $request->coveniences_immobile);
        // Upload image

        $file = $request->allFiles()['image_main'];
        $immobile_image = new ImageImmobile();
        $immobile_image->path_image = $file->store('public/user_' . auth()->user()->id . '/immobile_' . $immobile->id);
        $immobile_image->immobile_id = $immobile->id;
        $immobile_image->path_image =  substr($immobile_image->path_image, 7);
        $immobile_image->save();

        unset($immobile_image);
        for ($i = 0; $i < count($request->allFiles()['images']); $i++) {
            $file = $request->allFiles()['images'][$i];

            $immobile_image = new ImageImmobile();
            $immobile_image->path_image = $file->store('public/user_' . auth()->user()->id . '/immobile_' . $immobile->id);
            $immobile_image->immobile_id = $immobile->id;
            $immobile_image->path_image =  substr($immobile_image->path_image, 7);
            $immobile_image->save();
            unset($immobile_image);
        }
        session()->put(['mensage' => ['title' => 'Imovel cadastrado com sucesso', 'text' => "", 'icon' => "success", "function" => "alert"]]);
        return redirect(route('immobile.show', ['immobile' => $immobile['id']]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Immobile  $immobile
     * @return \Illuminate\Http\Response
     */
    public function show(Immobile $immobile)
    {

        return view("Immobile/show", ['immobile' => $immobile]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Immobile  $immobile
     * @return \Illuminate\Http\Response
     */
    public function edit(Immobile $immobile)
    {
        $rooms = Room::all();
        $furnitures = Furniture::all();
        return view("Immobile/edit", ['rooms' => $rooms, "furnitures" => $furnitures, 'immobile' => $immobile]);
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
    public function myimmobile()
    {
        $immobiles = Immobile::where('user_id', auth()->user()->id)->get();
        return view("immobile/myproperty", ["immobiles" => $immobiles]);
    }
}
