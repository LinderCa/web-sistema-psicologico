@component('components.header')
    @slot('nombreUsuario');
@endcomponent

<div class="w-full h-[93vh] relative  pr-0">
    @component('components.aside')
    @endcomponent

    <!-- En el momento de ir al enlace esta sesion se hace hidden y se muestra el test -->
    <div class="pl-8 p-3 md:ml-[220px] lg:p-0 ">
        <section class="vista_principal_postulante hidden">
            <section class="min-h-[80vh] ">
                <!-- CONTENEDOR DE IMAGEN Y TEXTO -->
                <div class="lg:flex lg:flex-row lg:justify-center lg:items-center lg:p-4">
                    <figure class="w-full overflow-hidden h-min  lg:h-[85vh] lg:w-[40%]">
                        <img src="{{asset('assets/imagenes/subgerentes.png')}}" alt="SubGerentes" class="w-full h-full object-contain">
                    </figure>
                    <div class="p-5 text-center lg:w-[60%] lg:pr-8">
                        <header>
                            <h3 class="text-6xl font-bold">Bienvenido <span class="text-color-f5">a F5 solution</span> </h3>
                        </header>
                        <main class="text-4xl hidden lg:block">MUCHSO ÁNIMOS EN TUS EVALUACIONES</main>
                        <footer class="flex h-32 justify-around gap-11 lg:mt-8 ">
                            <figure class="p-3">
                                <img src="{{asset('assets/imagenes/f5_solution.png')}}" alt="logo de f5 solution" class="h-full">
                            </figure>
                            <figure class="p-3">
                                <img src="{{asset('assets/imagenes/innovaTesis.png')}}" alt="logo de f5 solution" class="h-full">
                            </figure>
                        </footer>
                    </div>
                </div>
            </section>
            <div class="text-right pr-8 text-color-f5 font-figtre text-[18px] hover:text-black flex justify-end md:hidden">
                <a href="">Ir a Test Psicologico </a>
                <img src="{{asset('assets/icons/flecha_right.png')}}" alt="">
            </div>
        </section>

        <!-- VISTA CUESTIONARIO -->
        <section class="vista_test pr-5 ">
            <!-- INSTRUCCIONES -->
            <article class=" py-2">
                <h3 class="py-2 text-2xl font-bold text-color-f5">INSTRUCCIONES PARA REALIZAR EL CUESTIONARIO</h3>
                <p> Debes contestar las opciones otorgándoles un valor de 1 a 4. A la opción con la que más te identifiques le asignas un 4, y con la que sientas menos afinidad por tu forma de reaccionar le colocas un 1.<br> <span class="text-gray-800">NO LE PIENSES MUCHO PARA CONTESTAR</span>, lo primero que se te venga a la mente es lo mejor.</p>
                <div class="p-3 border-solid border-4 rounded-[10px] mt-4">
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
        </section>
        <div>
            <h2>LISTA DE USUARIOS</h2>
            @if ($users->isEmpty())
                <p>LISTA SIN NINGUN USUARIO</p>
            @else
            <ul>
                @foreach ($users as $user)
                <li>{{ $user->names }}</li>
                @endforeach
            </ul>
            @endif

            <!--
            @forelse ($users as $user )
                <li>{{$user->names}}</li>
            @empty
                <p>Lista vacia</p>
            @endforelse
            -->
        </div>

         <!--Extendemos el footer con la posibilidad de insertatr un archivo javascript -->
         @section('archivo_script')

        <!-- <script src="{{ asset('js/detalles.js') }}"></script> -->
        @endsection
    </div>
</div>
