<?php

namespace App\Http\Controllers\Food;

use App\Models\Food;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\FoodCollection;

class FoodController extends Controller
{
    public function index()
    {
        $foods = Food::all();
        return response()->json(new FoodCollection($foods), Response::HTTP_OK);
    }

    public function histories()
    {
        $food = Food::where('id', request('food_id'))->with('orders')->get();
        return response()->json($food, Response::HTTP_OK);
        $histories = clone ($food)->with('orders')->get();
        return response()->json($histories, Response::HTTP_OK);

        return response()->json($histories, Response::HTTP_OK);
    }
}
