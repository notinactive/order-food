<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'order_code' => $this->order_code,
            'time_of_preparation' => $this->time_of_preparation,
            'total' => $this->total,
            'status' => $this->status,
            'user'=> new UserResource($this->user)
        ];
    }
}
