<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'mobile' => $this->mobile,
            'birth_date' => $this->birth_date,
            'gender' => $this->gender,
            'avatar' => $this->avatar,
            'status' => $this->session_log->status,
        ];
    }
}
