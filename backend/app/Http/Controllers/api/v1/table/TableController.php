<?php

namespace App\Http\Controllers\api\v1\table;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Table;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Spatie\QueryBuilder\AllowedFilter;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Table::all();
    }

    public function all($id)
    {
        /* $result = QueryBuilder::for(Comment::class)
        ->allowedFilters(['restaurant.id'])
        ->with('User')
        ->paginate(9);
        return $result; */
        
       /*  $results = Comment::where('restaurant_id',$id)->with('user')->get();

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
        $validatedDate = $request->validate([
            'user_id' => 'required',
            'restaurant_id' => 'required',
            'comment' => 'required',

        ]);

      $newComment = Comment::create($validatedDate);
    $id = $newComment->id;
      $comment = Comment::where('id',$id)->with('user')->get();
      
      return $comment;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
