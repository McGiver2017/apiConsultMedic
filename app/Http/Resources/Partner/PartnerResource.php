<?php

namespace App\Http\Resources\Partner;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Direction\DirectionResource;

class PartnerResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'phone' => $this->phone,
            'type' => $this->type,
            'imageUrl' => $this->imageUrl,
            'direction' => new DirectionResource($this->Direction)
        ];
    }
}
