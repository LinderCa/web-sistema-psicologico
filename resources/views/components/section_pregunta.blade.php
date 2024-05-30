<section class="flex flex-col gap-2 pb.0" >
    <!-- incluimos el componente de pregunta -->
    @component('components.pregunta_test')
        @slot('readonly', $lectura)
        @slot('identi','0')
        @slot('value',$value)
        @slot('pregunta',$pregunta_a)
    @endcomponent
    @component('components.pregunta_test')
        @slot('readonly','readonly')
        @slot('identi','0')
        @slot('value',4)
        @slot('pregunta',$pregunta_b)
    @endcomponent
    @component('components.pregunta_test')
        @slot('readonly','readonly')
        @slot('identi','0')
        @slot('value',1)
        @slot('pregunta',$pregunta_c)
    @endcomponent
    @component('components.pregunta_test')
        @slot('readonly','readonly')
        @slot('identi','0')
        @slot('value',2)
        @slot('pregunta',$pregunta_d)
    @endcomponent
</section>
