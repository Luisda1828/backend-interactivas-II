@extends('layouts.layout')

@section('content')
<a class=" text-blue-3 text-bold text-texto" href="{{route('home.index')}}"><img class="px-8" src="{{ asset('storage/images/back.svg') }}" alt=""></a>
<h1 class="text-center text-blue-3 text-main text-titulo font-pesado py-4">Registro de cursos</h1>

<table class="table-fixed w-full border-separate border-spacing-y-5 justify-center p-8 text-subtitulo font- font-light text-blue-2">
        <thead>
            <tr>
                <th class="border-b-[0.5px] border-blue-3/50">Codigo</th>
                <th class="border-b-[0.5px] border-blue-3/50">Nombre</th>
                <th class="border-b-[0.5px] border-blue-3/50">Profesor</th>
                <th class="border-b-[0.5px] border-blue-3/50">Semestre</th>
                <th class="border-b-[0.5px] border-blue-3/50">Año</th>
                <th class="border-b-[0.5px] border-blue-3/50"></th>
            </tr>
        </thead>
        <tbody class="w-full justify-center p-8 text-texto font-second font-light text-blue-2">
        <tr>
        </tr>
        @foreach($courses as $course)
            <tr class="text-center y-4">
                <td>{{$course->cour_id}}</td>
                <td>{{$course->cour_name}}</td>
                <td>{{$course->user_name}} {{$course->user_lastname}}</td>
                <td>{{$course->cour_semester}}</td>
                <td>{{$course->cour_year}}</td>
                <td class="flex gap-x-2">
                    <a class="bg-blue-3 text-white px-8 ring-1 ring-blue-3 py-2 rounded-lg font-bold" href="{{route('course.edit',$course->cour_id)}}">Editar</a>
                        <form action="{{route('course.destroy',$course->cour_id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class=" px-8 ring-1 ring-blue-3 py-2 rounded-lg font-light hover:bg-red-700 hover:text-white">Eliminar</button>
                        </form>
                </td>
            </tr>
        @endforeach 
        </tbody>
    </table>
    <div class="flex justify-center text-blue-3">
        {{$courses->onEachSide(5)}}
    </div>
@endsection