<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\UserHasCourse;
use App\Models\Event;
use App\Models\UserHasEvent;


class UserHasCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = User::where('id_type', 2)->get();
        $cursos = Course::all();

        return view('asingCourse', compact('usuarios', 'cursos'));
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
        $usuarios = User::where('id_type', 2)->get();
        $cursos = Course::all();

        $cursosSeleccionados = json_decode($request->cursosSeleccionados);
        $id= $request->usuario;
        foreach ($cursosSeleccionados as $course) {
            $userHasCourse = UserHasCourse::create([
                'id_user' => $request->usuario,
                'id_course' => $course,
                'progress' => 0
            ]);
        }

        $events = Event::select(
            'user_has_courses.id_user',
            'events.eve_id_course',
            'events.eve_id'
        )->join('user_has_courses', 'events.eve_id_course', '=', 'user_has_courses.id_course')
        ->where('user_has_courses.id_user',$request->usuario) 
        ->get();

         foreach ($events as $event) {
             $event=UserHasEvent::create([
                 'id_user' => $event->id_user,
                 'id_events' => $event->eve_id,
                 'estado' => 'Incompleto'
             ]);
         }
         return view('asingCourse', compact('usuarios', 'cursos'));
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
