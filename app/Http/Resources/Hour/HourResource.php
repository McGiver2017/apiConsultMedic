<?php

namespace App\Http\Resources\Hour;

use Illuminate\Http\Resources\Json\JsonResource;

class HourResource extends JsonResource
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
            'hour' => $this->hour,
            'estado' => $this->estado
        ];
    }
}
