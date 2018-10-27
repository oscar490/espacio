{{-- Vista de todos los equipos --}}

@extends('app')


@section('content')

<div class="row">

    {{-- Menú lateral --}}
    @include('main_left')

    {{-- Tableros --}}
    <div class="col-md-10">

      @foreach ($equipos as $equipo)
        <div id="equipos" class="row">

          <p>{{$equipo->nombre}}</p>

          @foreach ($equipo->tableros as $tablero)
            <div class="col-md-3 tablero">
              <p>{{$tablero->nombre}}</p>
            </div>
          @endforeach
        </div>
      @endforeach


    </div>

</div>


@endsection
