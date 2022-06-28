<?php

namespace App\Http\Controllers\Order;

use App\Http\Requests\AcceptOrderRequest;
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

    public function acceptOrder(AcceptOrderRequest $request)
    {
        $validated = $request->validated();
        if (isset($validated->message)) {
            return response()->json($validated, Response::HTTP_UNPROCESSABLE_ENTITY);

        }
        $order = Order::find(request('order_id'));
        $order->update([
            "status" => "preparing",
            "time_of_preparation" => request('time_of_preparation'),
        ]);

        return response()->json(["msg" => "سفارش توسط شما تأیید شده و به کاربر نیز اطلاع داده خواهد شد."], Response::HTTP_OK);
    }
}
