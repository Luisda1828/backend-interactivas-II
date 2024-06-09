@extends('layouts.layout')
@section('content')
<a class=" text-blue-3 text-bold text-texto" href="{{route('home.index')}}"><img class="px-8" src="{{ asset('storage/images/back.svg') }}" alt=""></a>
<h1 class="text-center text-blue-3 text-main text-titulo font-pesado py-4">Registro de eventos</h1>

<table class="table-auto w-full border-separate border-spacing-y-5 justify-center p-4 text-subtitulo font- font-light text-blue-2">
        <thead>
            <tr>
                <th class="border-b-[0.5px] border-blue-3/50">Titulo</th>
                <th class="border-b-[0.5px] border-blue-3/50">Descripcion</th>
                <th class="border-b-[0.5px] border-blue-3/50">Entrega</th>
                <th class="border-b-[0.5px] border-blue-3/50">Curso</th>
                <th class="border-b-[0.5px] border-blue-3/50">Categoria</th>
                <th class="border-b-[0.5px] border-blue-3/50">Etiqueta</th>
                <th class="border-b-[0.5px] border-blue-3/50"></th>
            </tr>
        </thead>
        <tbody class="w-full justify-center p-8 text-texto font-second font-light text-blue-2">
        <tr>
        </tr>
        @foreach($events as $event)
            <tr class="text-center">
                <td>{{$event->eve_title}}</td>
                <td>{{$event->eve_description}}</td>
                <td>{{$event->eve_datetime}}</td>
                <td>{{$event->cour_name}}</td>
                <td>{{$event->cat_name}}</td>
                <td>{{$event->tag_name}}</td>
                <td class="flex gap-x-2">
                    <a class="bg-blue-3 text-white px-8 ring-1 ring-blue-3 py-2 rounded-lg font-bold" href="{{route('event.edit',$event->eve_id)}}">Editar</a>
                        <form action="{{route('event.destroy',$event->eve_id)}}" method="POST">
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
        {{$events->onEachSide(5)}}
    </div>
@endsection