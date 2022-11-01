<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResource extends JsonResource
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
            'price' => $this->price,
            'qrCode' => $this->qr_code,
            'serviceName' => $this->service_name,
            'duration' => $this->duration,
            'slug' => $this->slug,
            'userId' => $this->user_id,
        ];
    }
}
