@if (isset($errors) && count($errors)>0)
    <div class="p-4 bg-rose-500/50 text-black rounded-xl mx-4 mb-5 text-sm ">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="pb-1">{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (Session::get('Exito',false))
<?php $data=Session::get('Exito');?>
    @if (is_array($data))
        @foreach ($data as $message)
            <div class="bg-yellow-500">
                <i>icono</i>
                {{$message}}
            </div>
        @endforeach
    @else
            <div class="bg-green-300 p-4 text-black rounded-xl mx-4 mb-5 text-sm flex gap-3 items-center">
                <i><img src="{{ asset('assets/icons/user_login.png') }}" alt="icono"></i>
                {{$data}}
            </div>
    @endif
@endif
