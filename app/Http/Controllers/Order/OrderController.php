<?php

namespace App\Http\Controllers\Order;

use App\Models\Order;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\OrderCollection;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('user')->get();
        return response()->json(new OrderCollection($orders), Response::HTTP_OK);
    }

}
