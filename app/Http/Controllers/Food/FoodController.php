<?php

namespace App\Http\Controllers\Food;

use App\Http\Requests\FoodRequest;
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

    public function histories(FoodRequest $request)
    {
        $validated = $request->validated();
        if (isset($validated->message)) {
            return response()->json($validated, Response::HTTP_UNPROCESSABLE_ENTITY);

        }

        $food = Food::where('id', request('food_id'))->with('orders')->get();
        return response()->json($food, Response::HTTP_OK);
    }

    public function inventory(FoodRequest $request)
    {
        $validated = $request->validated();
        if (isset($validated->message)) {
            return response()->json($validated, Response::HTTP_UNPROCESSABLE_ENTITY);

        }

        $food = Food::find(request('food_id'));
        return response()->json($food->warehouse_inventory, Response::HTTP_OK);
    }
}
