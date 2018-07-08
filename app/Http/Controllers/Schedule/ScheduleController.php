<?php

namespace App\Http\Controllers\Schedule;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Schedule;
use App\Http\Resources\Schedule\ProcedureFechaResource;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Schedule::with('Procedure')->with('Professional')->whereHas(
            'procedure', function ($query) {
                $query->where('id', 15);
            }
        )->where('date', '2018-07-08')->get();
        return $datos;
    }
    public function filter ($procedureId, $fecha){
        $datos = Schedule::with('Procedure')->with('Professional')->whereHas(
            'procedure', function ($query) use ( $procedureId) {
                $query->where('id', $procedureId);
            }
        )->where('date', $fecha)->get();
        return ProcedureFechaResource::collection($datos);
    }
    public function filterIdHorario ($procedureId, $fecha, $professionalId){
        $datos = Schedule::with('Procedure')->with('Professional')->whereHas(
            'procedure', function ($query) use ( $procedureId) {
                $query->where('id', $procedureId);
            }
        )->where('procedure_id', $procedureId)->where('professional_id', $professionalId)->where('date', $fecha)->get();
        if(count($datos)>0) {
            return new ProcedureFechaResource($datos[0]);
        }
        else {
            return [];
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
