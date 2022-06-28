<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MenuResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'parent' => $this->parent,
            'status' => $this->status,
            'foods'=>new FoodCollection($this->foods)
        ];
    }
}
