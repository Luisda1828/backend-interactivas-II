@extends('layouts.layoutConfirm')

@section('content')

<form action="{{route('auth.store')}}" Method="POST">
    @csrf
    @Method('POST')
      <div class='flex flex-col items-end mx-10 lg:mx-72 xl:mx-96'>
        <h1 class='m-auto font-bold text-4xl mb-[1.562rem] text-blue-3'>Iniciar sesion (Administradores)</h1>
        @if(isset($message))
          <h1 class='m-auto text-red-600'>{{$message}}</h1>
          @endif
        <!-- <h1 class='m-auto text-red-600'>error</h1> -->

        <input type='text' name='usuario' 
          placeholder='Usuario'
          class="w-full mb-4 h-16 text-center ring-2 ring-blue-3 rounded-full text-blue-3 focus:outline-none text-texto font-regular font-second bg-blue-1"
        />
        <input type='password' name='contrasena' 
          placeholder='Contraseña'
          class="w-full mb-4 h-16 text-center ring-2 ring-blue-3 rounded-full text-blue-3 focus:outline-none text-texto font-regular font-second bg-blue-1"
        />
        <a class="text-blue-3 mb-[1.562rem] text-sm text-nowrap" href="">Olvidó su contraseña?</a>
        <button type="submit" class='flex bg-blue-1 font-main font-bold text-subtitle justify-center items-center mb-4 text-center ring-2 ring-blue-3 rounded-full text-blue-3 w-full h-16'>Iniciar Sesion</button>
      </div>
        </form>

@endsection