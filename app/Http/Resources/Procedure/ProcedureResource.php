<?php

namespace App\Http\Resources\Procedure;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Specialty\SpecialtyResource;

class ProcedureResource extends JsonResource
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
            'code' => $this->code,
            'name' => $this->name,
            'description' => $this->description,
            'type' => $this->type,
            'specialty' => new SpecialtyResource($this->specialty)
        ];
    }
}
