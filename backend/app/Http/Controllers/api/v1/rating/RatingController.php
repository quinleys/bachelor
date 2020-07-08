<?php

namespace App\Http\Controllers\api\v1\rating;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Rating;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function all($id)
    {
        /* $result = QueryBuilder::for(Comment::class)
        ->allowedFilters(['restaurant.id'])
        ->with('User')
        ->paginate(9);
        return $result; */
        
        $results = Rating::where('restaurant_id',$id)->get();
        $averagePrice = $results->avg('rating');
        return response (['ratings' => $results, 'avg' => round($averagePrice, 1)]);
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
            'rating' => 'required',

        ]);

      $newRating = Rating::create($validatedDate);
        $id = $newRating->id;
      $rating = Rating::where('id',$id)->get();
      
      return $rating;

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
