<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Food extends Model
{
    use HasFactory;

    protected $table = "foods";

    protected $guarded = [];

    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'food_menu', 'food_id');
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_items', 'food_id');
    }

    public function orderItem()
    {
        return $this->belongsToMany(OrderItem::class, 'order_items', 'food_id');
    }
}
