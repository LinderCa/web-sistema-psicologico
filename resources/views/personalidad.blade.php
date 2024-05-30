@extends('layouts.app')

@section('titulo','Test Personalidad')

@section('main')
<main class="w-full h-[80vh] md:mt-[74px] md:ml-14 lg:pl-[170px] overflow-y-scroll ">
    <div class="session-instrucciones">
        <!-- INSTRUCCIONES -->
        <article class="px-6 py-8 select-none">
            <h3 class="mb-4 text-2xl font-bold text-color-f5">INSTRUCCIONES PARA REALIZAR EL CUESTIONARIO</h3>
            <p class="font-sans">Debes contestar las opciones otorgándoles un valor de <span class="font-bold">1</span> a <span class="font-bold">4</span>. A la opción con la que más te identifiques le asignas un <span class="font-bold">4</span>, y con la que sientas menos afinidad por tu forma de reaccionar le colocas un <span class="font-bold">1</span>.<br> <span class="text-gray-800 italic">NO LE PIENSES MUCHO PARA CONTESTAR</span>, lo primero que se te venga a la mente es lo mejor.</p>
            <div class="p-3 border-solid border-4 rounded-[10px] mt-4 bg-black/10">
                <p class="font-roboto text-xl py-2 pl-1"><span class="">X.</span> Características que más te describen</p>
                @component('components.section_pregunta')
                    @slot('lectura','readonly')
                    @slot('value',3)
                    @slot('pregunta_a','A. Toma acción, persuasivo, convincente.')
                    @slot('pregunta_b','B. Carismático, magnético, desinhibido.')
                    @slot('pregunta_c','C. Humilde, compasivo con la gente.')
                    @slot('pregunta_d','D. Sistemático, escéptico, precavido.')
                @endcomponent
            </div>

        </article>
        <div class="text-white bg-color-f5 px-5 py-2 rounded-md flex w-max gap-4 cursor-pointer hover:bg-color-f5/50 text-center mx-auto mt-2 mb-4">
            <input type="button" value="Comenzar" class="cursor-pointer" onclick="mostrarTest()">
            <img src="{{ asset('assets/icons/comenzar.png') }}" class="cursor-pointer">
        </div>
    </div>

    <!-- MOSTRAMOS LA SESION DE PREGUNTAS -->
    <div class="hidden sesion-preguntas ">
        <div class="flex h-screen py-6 px-10 justify-center">
            @if (isset($datos))
            <form action="/testPersonalidad" class="" method="POST">
                @csrf
                @foreach ($datos as $dato)
                <!-- CARD CON 4 PREGUNTAS Y UN TITULO -->
                <div class="border-4 rounded-md border-color-f5/30 p-4 mb-3">
                    <h2 class="font-sans font-semibold mb-2">{{$dato['key'] . ") ". $dato['title']}}</h2>
                    @component('components.pregunta_test')
                        @slot('readonly','')
                        @slot('identi',$dato['key'] . "_A")
                        @slot('value','')
                        @slot('pregunta',$dato['pregunta_A'])
                    @endcomponent
                    @component('components.pregunta_test')
                        @slot('readonly','')
                        @slot('identi',$dato['key'] . "_B")
                        @slot('value','')
                        @slot('pregunta',$dato['pregunta_B'])
                        @endcomponent
                    @component('components.pregunta_test')
                        @slot('readonly','')
                        @slot('identi',$dato['key'] . "_C")
                        @slot('value','')
                        @slot('pregunta',$dato['pregunta_C'])
                        @endcomponent
                        @component('components.pregunta_test')
                        @slot('readonly','')
                        @slot('identi',$dato['key'] . "_D")
                        @slot('value','')
                        @slot('pregunta',$dato['pregunta_D'])
                    @endcomponent
                </div>
                @endforeach
                <div class="text-white bg-color-f5 px-5 py-2 rounded-md flex w-max gap-4 cursor-pointer hover:bg-color-f5/50 text-center mx-auto mt-2 mb-6">
                    <button type="submit" class="cursor-pointer" >Enviar</button>
                    <img src="{{ asset('assets/icons/check_white.png') }}" class="cursor-pointer">
                </div>
                </form>

            @else
                <p>NO EXISTE NINGUNA PREGUNTA PARA ESTE TEST</p>
            @endif
        </div>
    </div>
</main>

@endsection

@section('archivo_script')
<script src="js/detalles.js"></script>
@endsection


<!--


-->
