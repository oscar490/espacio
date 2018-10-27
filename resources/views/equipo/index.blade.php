{{-- Vista de todos los equipos --}}

@extends('app')


@section('content')

<section class="content">
  <div class="row">

      {{-- Menú lateral --}}
      @include('main_left', ['equipos' => $equipos])

      {{-- Tableros --}}
      <div class="col-md-10">

        @foreach ($equipos as $equipo)
          <div id="equipos" class="row">

            <p>
              <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
              &nbsp;
              {{$equipo->nombre}}
            </p>

            @include('equipo.tableros', ['equipos' => $equipos])

          </div>
          <br>
        @endforeach


      </div>

  </div>
</section>


@endsection
