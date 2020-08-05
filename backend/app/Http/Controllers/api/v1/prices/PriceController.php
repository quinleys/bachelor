<?php

namespace App\Http\Controllers\api\v1\prices;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Rating;
use App\Price;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // returns all prices;
        return Price::all();
    }



}
