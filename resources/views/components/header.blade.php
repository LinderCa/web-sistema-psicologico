<nav class="bg-gray-50 w-full flex justify-between items-center px-8 py-4 text-xl">
    <div class="flex gap-4 md:justify-center md:items-center">
        <img src="{{ asset('assets/icons/menu.png') }}" class="cursor-pointer select-none w-8 object-contain">
        <h3 class="text-[18px] md:text-[22px] ">ROL - POSTULANTE</h3>
    </div>
    <div class="flex gap-2 items-center text-xs border-2 border-gray-200 py-2">
        <figure class=" w-auto  ">
            <img src=" {{asset('assets/imagenes/practicantes/practica_nombre_apellidos.png')}}" class="w-full hidden">
        </figure>
        <span class="hidden sm:block">{{$nombreUsuario}}</span>
        <img src=" {{asset('assets/icons/down-arrow.png')}}" class="w-3 cursor-pointer select-none mr-2">
    </div>
</nav>
