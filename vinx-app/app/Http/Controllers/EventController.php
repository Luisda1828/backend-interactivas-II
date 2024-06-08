<?php

namespace App\Http\Controllers;
use App\Models\Event;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $eventos = DB::table('events')
        ->select(
            'eve_id',
            'eve_title',
            'eve_id_course',
            'eve_description',
            'id_etiqueta',
            'id_category',
            'eve_image',
            'eve_datetime',
            DB::raw('DAYNAME(eve_datetime) as dia_semana'), // Agregar el nombre del día de la semana
            DB::raw('DATE_FORMAT(eve_datetime, "%h:%i %p") as hora'),
            DB::raw('DAY(eve_datetime) as dia')
        )
        ->get();

    return response()->json($eventos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
