<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('titulo')</title>
        @vite('resources/css/app.css')
        @yield('boostrap')
    </head>
    <body class=" bg-gray-100 w-full h-screen flex flex-col justify-between ">
        <header class="p-6 bg-color-f5 w-full z-20 shadow md:fixed">
            <div class="flex justify-between text-gray-100 items-center">
                <h2 class="text-[22px] md:ml-8">SISTEMA PSICOLOGICO</h2>
                <div class="flex items-center">

                    <figure class="size-14 md:absolute md:left-0">
                        <img src="{{asset('assets/imagenes/f5_solution.png') }}" class="h-full ">
                    </figure>

                    @auth
                    <figure class="size-8 md:hidden">
                        <!--Si se encuentra autenticado entonces mostramos una opcion de menu -->
                        <img src="{{asset('assets/icons/menu_white.png')}}" class="menu-header h-full cursor-pointer hover:mix-blend-soft-light hover:scale-125">
                    </figure>

                    <figure class="hidden md:block border-[1px] py-1 px-4 text-sm rounded-sm border-white/50">{{auth()->user()->names ?? auth()->user()->username}}</figure>
                    @endauth
                </div>

            </div>
        </header>
        <div class="mb-2 w-full ">
            <div class="flex gap-3 ">
                @auth
                <aside class="hidden md:block bg-color-f5 h-screen pr-6 md:fixed md:top-[80px]">
                    <ul class="">
                        @component('components.item_aside')
                            @slot('enlace','testPersonalidad')
                            @slot('icono','assets/icons/personalidad.png')
                            @slot('test','Test   .    Personalidad')
                        @endcomponent
                        @component('components.item_aside')
                            @slot('enlace','testPersonalidad')
                            @slot('icono','assets/icons/comportamiento.png')
                            @slot('test','Test Comportamiento')
                        @endcomponent
                        @component('components.item_aside')
                            @slot('enlace','logout')
                            @slot('icono','assets/icons/log_out.png')
                            @slot('test','Cerrar Sesión')
                        @endcomponent
                    </ul>
                </aside>
                @endauth
                @yield('main')
            </div>
            <div class="bg-color-f5/50 absolute top-[100px] min-h-full w-full lista-hamburguesa hidden md:hidden">
                <ul>
                    <li class="text-center border-2 border-white/50 text-white p-5 text-xl font-sans hover:bg-color-f5 cursor-pointer mb-1"><a href="">Test Psicologico</a></li>
                    <li class="text-center border-2 border-white/50 text-white p-5 text-xl font-sans hover:bg-color-f5 cursor-pointer"><a href="">Test Psicologico</a></li>
                    <li class="text-center border-2 border-white/50 text-white p-5 text-xl font-sans hover:bg-color-f5 cursor-pointer"><a href="">Cerrar Sesión</a></li>
                </ul>
            </div>
        </div>


<!-- Incluimos el pacial estatico -->
<footer class="text-center p-5 text-gray-500 font-bold uppercase ">
    Sistema Psicologico - Todos los derechos reservados
    {{now()->year}} <!-- son helper :  basicamnete funciones que puedes usar en templates de laravel-->
</footer>
    <!-- inyectamos un archivo javascript-->
    @yield('archivo_script')
    @yield('boostrap')
</body>
</html>

