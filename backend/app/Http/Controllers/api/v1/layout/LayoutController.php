<?php

namespace App\Http\Controllers\api\v1\layout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Layout;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Spatie\QueryBuilder\AllowedFilter;
use Obiefy\API\Facades\API;

class LayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Layout::all();
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
        /* $validatedDate = $request->validate([
            'title' => 'required',
            'restaurant_id' => 'required',

        ]);
        if($validatedDate){
            $layout = new Layout();
            $layout->title = $validatedDate->title;
            $layout->restaurant_id= $validatedDate->restaurant_id;
            $layout->save();
            
        $layout->tables()->attach($table, [
            'x' => $request->x
        ]
    
        } */
       
        $layout = new Layout;
        $layout->title = $request->title;
        $layout->restaurant_id = $request->restaurant_id;
        $layout->save();
        $tables = $request->tables;
        
       /*  $decoded = json_decode($request->tables, true); */
        foreach ($tables as $table) {
            /* var_dump($table); */
            $layout->tables()->attach($table['id'],["restaurant_id" => $request->restaurant_id,"x" => $table['x'], "y" => $table['y'],"width" => $table['width'] ,"height" => $table['height']]);
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
        return Layout::where('restaurant_id',$id)->with('tables')->get();
    }
    public function specific($id)
    {
        return Layout::with('tables')->with('room')->find($id);
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
        //
    }
}
