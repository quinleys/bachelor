<?php

namespace App\Http\Controllers\api\v1\room;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Room;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Spatie\QueryBuilder\AllowedFilter;
use Obiefy\API\Facades\API;
class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Room::all();
    }

    public function all($id)
    {
        /* $result = QueryBuilder::for(Comment::class)
        ->allowedFilters(['restaurant.id'])
        ->with('User')
        ->paginate(9);
        return $result; */
        
        /* $results = Comment::where('restaurant_id',$id)->with('user')->get();

        return $results; */
    }

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

        $room = new Room;
        $room->title = $request->title;
        $room->restaurant_id = $request->restaurant_id;
        $room->user_id = $request->user_id;
        $room->layout_id = null;
        $room->walls = $request->walls;
        $room->active = false;


        $room->save();

        if($request->extras){
            $extras = $request->extras;
            /*  $decoded = json_decode($request->tables, true); */
             foreach ($extras as $extra) {
                 /* var_dump($table); */
                 $room->extras()->attach($extra['realId'],["restaurant_id" => $request->restaurant_id, "x" => $extra['x'], "y" => $extra['y'],"width" => $extra['width'] ,"height" => $extra['height']]);
             }
        }
        return api()->ok();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Room::where('restaurant_id',$id)->where('active',true)->with('layout')->with('extras')->with('layout.tables')->get();
    }

    public function specific($id)
    {
        return Room::with('extras')->find($id);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room = Room::find($id);
        $room->extras()->detach();
        $room->delete();
        return $room;
    }
}
