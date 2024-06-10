@extends('layouts.layout')

@section('content')

<div class='inset-0 bg-gray-950 bg-opacity-50 fixed z-50'>
            <div class="flex overflow-y-auto fixed inset-0 z-50 justify-center items-center w-full  sm:max-h-full ">
                <div class="p-4 max-h-full">
                    <form action="{{route('event.update',$event->eve_id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class=' bg-white ring-1 ring-blue-3 rounded-2xl lg:w-[40vw] w-[80vw] px-8 text-center py-5'>
                        <div class='flex items-center gap-x-5'>
                        <input class="w-full mb-4 h-16 text-center ring-2 ring-blue-3 rounded-full text-blue-3 focus:outline-none text-texto font-regular font-second bg-blue-1" value="{{$event->eve_title}}" placeholder="Nombre del evento" name="nombre"/>
                            
                            <!-- {/* Upload button */} -->
                            <div class='flex flex-col items-center mb-[1.562rem] m-auto'>
                        <div class='my-3 sm:size-20 size-12 overflow-hidde relative ring-2 ring-blue-3 rounded-full'>
                            <img id="preview" class='absolute sm:top-4 top-3 sm:size-12 size-6 sm:right-4 right-3' src="{{ asset('storage/images/upload.svg') }}" alt="" />
                            <input type="hidden" value="{{$event->eve_image}}" name="imagenStoradge">
                            <input id="fileInput" class='absolute sm:top-7 sm:righ-0 opacity-0 right-1' type="file" name="imagen"/>
                        </div>
                        <h3 class='text-subtitulo text-blue-3'>Subir imagen</h3>
                    </div>
                        </div>

                        <div class='sm:grid sm:grid-cols-2 gap-x-4 p'>
                            <div>
                                <h1 class='text-blue-3 font-main text-subtitulo mb-[1rem]'>Fecha y hora</h1>
                        
                                <div class='flex gap-x-4'>
                                <input class='w-full mb-[1.562rem] h-[62px] text-center ring-[0.031rem] ring-blue-3 rounded-full text-blue-3 focus:outline-none text-blue-3 font-bold  text-texto font-regular font-second bg-blue-1' value="{{ date('Y-m-d', strtotime($event->eve_datetime)) }}" type="date" name="fecha"/>
                                <input class='w-full mb-[1.562rem] h-[62px] text-center ring-[0.031rem] ring-blue-3 rounded-full text-blue-3 focus: outline-none text-blue-3 font-bold  text-texto font-regular font-second bg-blue-1' value="{{ date('H:i', strtotime($event->eve_datetime)) }}" type="time" name="hora"  />
                                </div>
                            </div>
                            <!-- combo etiqueta -->
                            <div>
                                <h1 class="text-subtitulo mb-[0.781rem] text-blue-3">Etiqueta</h1>
                                <select class="w-full mb-[0.781rem] sm:h-[62px] h-[52px] text-center ring-[0.031rem] ring-blue-3 rounded-full text-blue-3 focus:outline-none text-blue-3 font-bold text-texto font-regular font-second bg-blue-1" name="etiqueta">
                                
                                @foreach($tags as $tag)
                                <option value="{{ $tag->tag_id }}" @selected($tag->tag_id == $event->id_etiqueta)>{{$tag->tag_name}}</option>
                                @endforeach
                            </select>
                            </div>

                            <!-- combo Curso -->
                            <div>
                                <h1 class="text-subtitulo mb-[0.781rem] text-blue-3">Curso</h1>
                                <select class="w-full mb-[0.781rem] sm:h-[62px] h-[52px] text-center ring-[0.031rem] ring-blue-3 rounded-full text-blue-3 focus:outline-none text-blue-3 font-bold text-texto font-regular font-second bg-blue-1" name="curso" >
                                @foreach($courses as $course)
                                    <option value="{{$course->cour_id}}" @selected($course->cour_id == $event->eve_id_course)>{{$course->cour_name}}</option>
                                @endforeach
                                </select>
                            </div>

                            <!-- combo Categoria -->
                            <div>
                                <h1 class="text-subtitulo mb-[0.781rem] text-blue-3">Categoria</h1>
                                <select class="w-full mb-[0.781rem] sm:h-[62px] h-[52px] text-center ring-[0.031rem] ring-blue-3 rounded-full text-blue-3 focus:outline-none text-blue-3 font-bold text-texto font-regular font-second bg-blue-1" name="categoria" >
                                @foreach($categories as $category)
                                    <option value="{{$category->cat_id}}" @selected($category->cat_id == $event->id_category)>{{$category->cat_name}}</option>
                                @endforeach
                                </select>
                            </div>

                            <div class='col-span-2 mb-[1.562rem]'>
                                <h1 class='font-bold text-left text-blue-3 font-main text-subtitulo mb-[1.562rem]'>Descripcion</h1>
                                <textarea class='w-full h-24 bg-blue-1 rounded-2xl p-4 ring-[0.031rem] ring-blue-3 text-blue-3 mb-[1.562rem]' name="descripcion" placeholder="Escribe una hermosa descripcion <3">{{$event->eve_description}}</textarea>
                            </div>
                        </div>

                        <button type="submit" class='flex bg-blue-3 font-main font-pesado text-subtitulo justify-center focus:outline-none items-center mb-[1rem] text-center rounded-full text-white w-full h-[62px] '>Guardar Evento</button>
                        <a  href="{{route('home.index')}}" class='text-blue-3 mb-[3.124rem] font-bold text-subtitulo cursor-pointer' >Regresar</a>
                    </div>
                    </form>

                </div>
            </div>
        </div>

@endsection