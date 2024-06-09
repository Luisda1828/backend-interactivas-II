@extends('layouts.layout')

@section('content')
    <h1 class="text-center text-blue-3 text-main text-titulo font-pesado ">Nuevo cursos</h1>

    <div class='inset-0 bg-gray-950 bg-opacity-50 fixed z-50'>
        <div class="flex overflow-y-auto fixed inset-0 z-50 justify-center items-center w-full sm:max-h-full">
            <div class="p-4 max-h-full">
                <div class='bg-white ring-1 ring-blue-3 rounded-2xl lg:w-[40vw] w-[80vw] px-8 text-center py-5'>
                <h1 class="text-center text-blue-3 text-main text-titulo font-pesado mb-[1.562rem]">Añadir nuevo curso</h1>
                <form action="{{route('course.store')}}" method="POST">
                    @csrf
                    <div class='flex items-center gap-x-5'>
                        <input name="name" class="w-full mb-4 h-16 text-center ring-2 ring-blue-3 rounded-full text-blue-3 focus:outline-none text-texto font-regular font-second bg-blue-1"
                            placeholder="Nombre del curso" />
                    </div>
                    <div class='sm:grid sm:grid-cols-2 gap-x-4 p'>
                        <div>
                            <h1 class="text-subtitulo mb-[0.781rem] text-blue-3">Código</h1>
                            <input class="w-full mb-[0.781rem] sm:h-[62px] h-[52px] text-center ring-[0.031rem] ring-blue-3 rounded-full text-blue-3 focus:outline-none text-blue-3 font-bold text-texto font-regular font-second bg-blue-1" name="codigo" type="text">
                        </div>
                        <div>
                            <h1 class="text-subtitulo mb-[0.781rem] text-blue-3">Semestre</h1>
                            <input class="w-full mb-[0.781rem] sm:h-[62px] h-[52px] text-center ring-[0.031rem] ring-blue-3 rounded-full text-blue-3 focus:outline-none text-blue-3 font-bold text-texto font-regular font-second bg-blue-1" name="semestre" type="number">
                        </div>
                        <div>
                            <h1 class="text-subtitulo mb-[0.781rem] text-blue-3">Año</h1>
                            <input class="w-full mb-[0.781rem] sm:h-[62px] h-[52px] text-center ring-[0.031rem] ring-blue-3 rounded-full text-blue-3 focus:outline-none text-blue-3 font-bold text-texto font-regular font-second bg-blue-1" name="anno" type="text">
                        </div>
                        <div class="mb-[1.562rem]">
                            <h1 class="text-subtitulo mb-[0.781rem] text-blue-3">Profesor</h1>
                            <select class="w-full mb-[0.781rem] sm:h-[62px] h-[52px] text-center ring-[0.031rem] ring-blue-3 rounded-full text-blue-3 focus:outline-none text-blue-3 font-bold text-texto font-regular font-second bg-blue-1" name="profesor">
                                @foreach($teachers as $teacher)
                                    <option value="{{$teacher->user_id}}">{{$teacher->user_name}} {{$teacher->user_lastname}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <button type="submit" class='flex bg-blue-3 font-main font-pesado text-subtitulo justify-center focus:outline-none items-center mb-[1rem] text-center rounded-full text-white w-full h-[62px] '>Guardar curso</button>
                    <a href="{{route('home.index')}}" class='text-blue-3 mb-[3.124rem] font-bold text-subtitulo cursor-pointer'>Regresar</a>
                </div>
                </form>
            </div>
        </div>
    </div>

@endsection