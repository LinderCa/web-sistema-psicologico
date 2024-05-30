<!-- Extendemos un layout que es la estructura de la web -->
@extends('layouts.app')
@section('titulo','home')

@section('main')
    <main class="w-full  min-h-[80vh] flex flex-col justify-stretch items-center gap-4 p-6 xl:flex-row-reverse xl:items-start xl:justify-center xl:mt-16 xl:pl-[200px] xl:gap-28 md:mt-[68px] lg:mt-[110px] md:ml-14 lg:pl-[170px] ">
        <figure class="w-[70%] lg:max-w-[600px]  ">
            <img src="{{asset('assets/imagenes/subgerentes.png')}}" alt="Sub Gerentes" class="">
            <img src="{{asset('assets/imagenes/destokHome.png')}}" alt="Sub Gerentes" class="hidden">
        </figure>
        <article class="self-center ">
            <header class="my-4 text-center">
                <h3 class="text-5xl font-bold md:text-6xl ">BIENVENIDO <span class="text-color-f5 lg:block">A F5 SOLUTION</span></h3>
            </header>
            <main>
                @guest
                    <p class="text-xl py-2 text-center md:text-2xl lg:mt-5">Para realizar sus evaluaciones debe <a href="{{route('login')}}" class="text-color-f5 underline visited:text-blue-800 focus:text-blue-800 active:text-blue-800">Ingresar Sesión</a></p>
                @endguest
            </main>
            <footer class="flex h-24 justify-around gap-11 mt-12">
                <figure class="p-3">
                    <img src="{{asset('assets/imagenes/f5_solution.png')}}" alt="logo de f5 solution" class="h-full">
                </figure>
                <figure class="p-3">
                    <img src="{{asset('assets/imagenes/innovaTesis.png')}}" alt="logo de f5 solution" class="h-full">
                </figure>
            </footer>
        </article>
    </main>
@endsection

@section('archivo_script')
<script src="{{ asset('js/detalles.js') }}"></script>
@endsection
