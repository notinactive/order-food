<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FoodResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'warehouse_inventory' => $this->warehouse_inventory,
            'status' => $this->status,
            'rate' => $this->rate,
            'orders' => new OrderCollection($this->orders),
        ];
    }
}
