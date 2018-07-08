<?php

namespace App\Http\Resources\Direction;

use Illuminate\Http\Resources\Json\JsonResource;

class DirectionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'city' => $this->city,
            'complement' => $this->complement,
            'neighborhood' => $this->neighborhood,
            'state' => $this->state,
            'street' => $this->street,
            'number' => $this->number,
            'type' => $this->type,
        ];
    }
}
