<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'userName' => $this->user_name,
            'firstName' => $this->first_name,
            'lastName' => $this->last_name,
            'newsletter' => $this->newsletter,
            'email' => $this->email,
            'amount' => $this->amount,
            'roleId' => $this->role_id,
            'password' => $this->password
        ];
    }
}
