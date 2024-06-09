<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;

class CourseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses=Course::select(
            'courses.cour_id',
            'courses.cour_name',
            'courses.cour_semester',
            'courses.cour_year',
            'users.user_name',
            'users.user_lastname'
        )->join('users','courses.cour_teacher_id','=','users.user_id')
        ->orderBy('cour_id','desc')
        ->Paginate(5);
        
        return view('courses',compact('courses'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers=User::where('id_type','3')->get();
        return view('createCourse',compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
         $course=Course::create([
             'cour_name'=>$request->name,
             'cour_teacher_id'=>$request->profesor,
             'cour_semester'=>$request->semestre,
             'cour_year'=>$request->anno,
         ]);
        return redirect()->route('course.index');
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
        $course = Course::find($id);
        $teachers=User::where('id_type','3')->get();
        $teacherId = $course->cour_teacher_id;
        return view('editCourse', compact('course','teachers','teacherId'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $course = Course::find($id);
        $course->update([
            'cour_name'=>$request->name,
            'cour_teacher_id'=>$request->profesor,
            'cour_semester'=>$request->semestre,
            'cour_year'=>$request->anno,
        ]);
        return redirect()->route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect()->route('course.index');
    }
}
