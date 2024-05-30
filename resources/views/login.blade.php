<!-- Extendemos el layout principal -->
@extends('layouts.app')

@section('titulo','login')

@section('main')
<main class="w-full h-[80vh] flex justify-center items-center lg:items-center">
    <aside class="hidden  lg:flex">
        <figure class="max-w-[600px]  ">
            <img src="{{ asset('assets/imagenes/vivian.png') }}" alt="subGerente" class="w-full">
        </figure>
    </aside>
    <form action="/login" method="POST" class="py-10 px-6 border-2 border-color-f5/20 rounded-2xl mx-10 shadow-xl shadow-color-f5/50 text-center w-[70%] max-w-[500px] " >
        @csrf
        @include('layouts._partials.messages')
        <!-- TITULO -->
        <div class="flex  flex-col justify-center items-center mb-4">
            <figure class="size-20">
                <img src="{{ asset('assets/imagenes/f5_solution.png') }}" class="h-full">
            </figure>
            <h3 class="text-3xl">Iniciar Sesión</h3>
        </div>
        <!-- CAMPOS DE ENTRADA -->
        <div class=" flex flex-col gap-2">
            <input type="text" name="username" placeholder="Usuario/Correo Electronico" class="text-xl pl-3 py-3 focus:text-color-f5 focus:bg-color-f5/5  border-[1px] rounded-xl border-color-f5/50 w-full pr-0">
            <input type="password" name="password" placeholder="Contraseña" class="pl-3 text-xl py-3 focus:text-color-f5 focus:bg-color-f5/5 w-full border-[1px] rounded-xl border-color-f5/50 pr-0">
             <!-- BUTTONES -->
            <div class="text-white bg-color-f5 px-5 py-2 rounded-md flex w-max gap-4 cursor-pointer hover:bg-color-f5/50 text-center mx-auto mt-2 mb-4">
                <input type="submit" value="Ingresar" class="cursor-pointer">
                <img src="{{ asset('assets/icons/user-white.png') }}" class="cursor-pointer">
            </div>
        </div>
        <a href="{{route('register')}}" class="text-color-f5 mx-auto pt-3 underline">Crear una cuenta</a>
    </form>

</main>

@endsection
