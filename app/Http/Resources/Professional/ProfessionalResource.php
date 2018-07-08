<?php

namespace App\Http\Resources\Professional;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Partner\PartnerResource;

class ProfessionalResource extends JsonResource
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
            'lastName' => $this->lastName,
            'partner' => new PartnerResource($this->Partner)
        ];
    }
}
