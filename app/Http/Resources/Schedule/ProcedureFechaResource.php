<?php

namespace App\Http\Resources\Schedule;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Procedure\ProcedureResource;
use App\Http\Resources\Professional\ProfessionalResource;
use App\Http\Resources\Hour\HourResource;

class ProcedureFechaResource extends JsonResource
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
            'date' => $this->date,
            'alert' => $this->alert,
            'info' => $this->date,
            'arrivalOrder' => $this->date,
            'price' => $this->date,
            'moneda' => $this->date,
            'procedure' => new ProcedureResource($this->Procedure),
            'professional' => new ProfessionalResource( $this->Professional),
            'partner' => $this->Professional->Partner,
            'horario' => HourResource::collection($this->Hours)
        ];
    }
}
