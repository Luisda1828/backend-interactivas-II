<?php

namespace App\Http\Controllers;
use App\Models\Event;
use App\Models\Course;
use App\Models\Tag;
use App\Models\Category;
use App\Models\UserHasCourse;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;


class EventController 
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
       

        $events=Event::select(
            'events.eve_id',
            'events.eve_title',
            'courses.cour_name',
            'events.eve_description',
            'tags.tag_name',
            'categories.cat_name',
            'events.eve_image',
            'events.eve_datetime'
        )->join('courses','events.eve_id_course','=','courses.cour_id')
        ->join('tags','events.id_etiqueta','=','tags.tag_id')
        ->join('categories','events.id_category','=','categories.cat_id')
        ->orderBy('cour_id','desc')
        ->Paginate(5);

        // $date = Carbon::parse($events->eve_datetime)->isoFormat('dddd D [/] MMMM [/] YYYY');
        // $hour=Carbon::parse($events->eve_datetime)->format('h:i A');
        
        return view('events',compact('events'));
        
        
    }

    public function apiEvent($id){
       /*  $userCourses = UserHasCourse::where('id_user', 1)
                                    ->with(['course.events'])
                                    ->get(); */

                                    $userCourses = UserHasCourse::where('id_user', $id)
                                    ->with(['course' => function($query) {
                                        $query->select('cour_id', 'cour_name', 'cour_teacher_id', 'cour_semester', 'cour_year')
                                              ->with(['events' => function($subQuery) {
                                                  $subQuery->select('eve_id', 'eve_title', 'eve_id_course', 'eve_description', 'id_etiqueta', 'id_category', 'eve_image', 'eve_datetime');
                                              }]);
                                    }])
                                    ->get();

                                    $formattedCourses = [];
                                    foreach ($userCourses as $userCourse) {
                                        $user_id = $userCourse->id_user;
                                        $courseData = [
                                            'cour_id' => $userCourse->course->cour_id,
                                            'cour_name' => $userCourse->course->cour_name,
                                            'cour_teacher_id' => $userCourse->course->cour_teacher_id,
                                            'cour_semester' => $userCourse->course->cour_semester,
                                            'cour_year' => $userCourse->course->cour_year,
                                            'events' => $userCourse->course->events,
                                        ];
                                
                                        if (!isset($formattedCourses[$user_id])) {
                                            $formattedCourses[$user_id] = [
                                                'id_user' => $user_id,
                                                'courses' => [],
                                            ];
                                        }
                                
                                        $formattedCourses[$user_id]['courses'][] = $courseData;
                                    }
                                
                                    // Convertir el array asociativo en un array indexado
                                    $formattedCourses = array_values($formattedCourses);
      
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
            DB::raw('DAYNAME(eve_datetime) as dia_semana'),
            DB::raw('DATE_FORMAT(eve_datetime, "%h:%i %p") as hora'),
            DB::raw('DAY(eve_datetime) as dia')
        )
        ->get();

    return response()->json($formattedCourses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses=Course::all();
        $categories=Category::all();
        $tags=Tag::all();
        return view('createEvent',compact('courses','categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $imageName = $request->imagen->getClientOriginalName();
            $imageName = str_replace(' ', '_', $imageName);
            $request->imagen->storeAs('public/images_events', $imageName);
        
        
        $event=Event::create([
            'eve_title'=>$request->nombre,
            'eve_id_course'=>$request->curso,
            'eve_description'=>$request->descripcion,
            'id_etiqueta'=>$request->etiqueta,
            'id_category'=>$request->categoria,
            'eve_image'=>$imageName,
            'eve_datetime'=>$request->fecha . ' ' . $request->hora
        ]);
       return redirect()->route('event.index')->with('success', 'Imagen subida con éxito');
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
        $event = Event::find($id);
        $courses=Course::all();
        $categories=Category::all();
        $tags=Tag::all();
        return view('editEvent', compact('event','courses','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        if($request->hasFile('imagen')){
            $newImageName = $request->imagen->getClientOriginalName();
            $newImageName = str_replace(' ', '_', $newImageName);
            if($newImageName==$request->imagenStoradge){
                     $newImageName = $request->imagenStoradge;
                 }else{
                     // Delete the old image from the directory
                    Storage::delete('public/images_events/' . $request->imagenStoradge);
                    $request->imagen->storeAs('public/images_events', $newImageName);
                 }
                $event = Event::find($id);
                $event->update([
                    'eve_title'=>$request->nombre,
                    'eve_id_course'=>$request->curso,
                    'eve_description'=>$request->descripcion,
                    'id_etiqueta'=>$request->etiqueta,
                    'id_category'=>$request->categoria,
                    'eve_image'=>$newImageName,
                    'eve_datetime'=>$request->fecha . ' ' . $request->hora
                    ]);
        }else{

            $event = Event::find($id);
                $event->update([
                    'eve_title'=>$request->nombre,
                    'eve_id_course'=>$request->curso,
                    'eve_description'=>$request->descripcion,
                    'id_etiqueta'=>$request->etiqueta,
                    'id_category'=>$request->categoria,
                    'eve_datetime'=>$request->fecha . ' ' . $request->hora
                    ]);

        }
        return redirect()->route('event.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = Event::find($id);
        Storage::delete('public/images_events/' . $event->eve_image);
        $event->delete();
        return redirect()->route('event.index');
    }
}
