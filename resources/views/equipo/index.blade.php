{{-- Vista de todos los equipos --}}

@extends('app')


@section('content')

<section class="content">
  <div class="row">

      {{-- Menú lateral --}}
      @include('main_left')

      {{-- Tableros --}}
      <div class="col-md-10">

        @foreach ($equipos as $equipo)
          <div id="equipos" class="row">

            <p>
              <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
              &nbsp;
              {{$equipo->nombre}}
            </p>

            @foreach ($equipo->tableros as $tablero)
              <div class="col-md-3 tablero">
                <p>{{$tablero->nombre}}</p>
              </div>
            @endforeach
          </div>
          <br>
        @endforeach


      </div>

  </div>
</section>


@endsection
