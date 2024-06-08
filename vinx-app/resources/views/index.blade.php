@extends('layouts.layout')

@section('content')
<h1 class="text-center text-blue-3 text-main text-titulo font-pesado">Gestion de cursos y eventos</h1>
    <div class="grid md:grid-cols-2 grid-cols-1 gap-4 justify-center md:p-[rem] p-[2rem]">
        <div class="flex flex-col items-center gap-y-8 md:p-[rem] p-[2rem]">
            <img src="{{ asset('storage/images/newCourse.svg') }}" alt="Nuevo curso">
            <a class="flex bg-blue-3 font-main font-pesado text-subtitulo justify-center items-center mb-[1rem] text-center rounded-full text-white w-full h-[62px]" href="{{route('course.index')}}">Crear curso</a>
        </div>

        <div class="flex flex-col items-center gap-y-8  md:p-[rem] p-[2rem]">
        <img src="{{ asset('storage/images/newEvent.svg') }}" alt="Nuevo evento">
            <a class="flex bg-blue-3 font-main font-pesado text-subtitulo justify-center items-center mb-[1rem] text-center rounded-full text-white w-full h-[62px] " href="{{route('event.index')}}">Crear evento</a>
        </div>

    </div>
@endsection
