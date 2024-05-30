<div class="flex gap-3 items-center mb-2">
    <input type="text" class="item-numerico border-solid border-2 rounded-sm size-8 text-center border-color-f5 focus:bg-color-f5/20 text-black" {{$readonly}} name="{{ $identi}}" value="{{$value}}" oninput="verificar(event)">
    <label class="font-sans ">{{$pregunta}}</label>
</div>


