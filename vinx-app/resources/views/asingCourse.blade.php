@extends('layouts.layout')

@section('content')

<script>
    const cursos = [];

    function guardarCurso(idCurso) {
        const cursoCheckbox = document.getElementById(idCurso);

        if (cursoCheckbox.checked) {
            // Agrega el curso al array si está seleccionado
            if (!cursos.includes(cursoCheckbox.value)) {
                cursos.push(cursoCheckbox.value);
            }
        } else {
            // Elimina el curso del array si no está seleccionado
            const index = cursos.indexOf(cursoCheckbox.value);
            if (index !== -1) {
                cursos.splice(index, 1);
            }
        }

        // Actualiza el campo oculto con los cursos seleccionados
        document.getElementById('cursosSeleccionados').value = JSON.stringify(cursos);

        console.log(cursos);
    }
</script>

<a class=" text-blue-3 text-bold text-texto" href="{{route('home.index')}}"><img class="px-8" src="{{ asset('storage/images/back.svg') }}" alt=""></a>

<form action="{{ route('userHasCourse.store') }}" method="POST">
    @csrf
    <div class="p-4 max-h-full flex justify-center">
        <div class="bg-white ring-1 ring-blue-3 rounded-2xl w-[80vw] px-8 text-center py-5">
            <div class="flex items-center gap-x-5">
            </div>

            <div class="grid grid-cols-2 gap-x-4 mb-[2rem]">
                <div class="col-span-2">
                    
                    <h1 class="text-subtitulo mb-[0.781rem] text-blue-3">Lista de estudiantes</h1>
                    <select class="w-full mb-[0.781rem] sm:h-[62px] h-[52px] text-center ring-[0.031rem] ring-blue-3 rounded-full text-blue-3 focus:outline-none text-blue-3 font-bold text-texto font-regular font-second bg-blue-1" name="usuario" id="">
                        @foreach($usuarios as $usuario)
                            <option value="{{ $usuario->user_id }}">{{$usuario->user_studentCarne}} - {{ $usuario->user_name }} {{ $usuario->user_lastname }}</option>
                        @endforeach
                    </select>
                </div>
                @foreach($cursos as $curso)
                <div class="flex justify-between">
                    <span>{{ $curso->cour_name }}</span>
                    <!-- Asigna un ID único al checkbox -->
                    <input class="items-end" type="checkbox" id="curso_{{ $curso->cour_id }}" value="{{ $curso->cour_id }}" onchange="guardarCurso('curso_{{ $curso->cour_id }}')">
                </div>
                @endforeach
            </div>

            <!-- Campo oculto para almacenar los cursos seleccionados -->
            <input type="hidden" id="cursosSeleccionados" name="cursosSeleccionados" value="[]">

            <button type="submit" class="flex bg-blue-3 font-main font-pesado text-subtitulo justify-center focus:outline-none items-center mb-[1rem] text-center rounded-full text-white w-full h-[62px]">Asignar Cursos</button>

            <a class="text-blue-3 mb-[3.124rem] font-bold text-subtitulo cursor-pointer">Regresar</a>
        </div>
    </div>
</form>

@endsection
