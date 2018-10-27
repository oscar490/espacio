{{-- Lista de tablero --}}


@foreach ($equipo->tableros as $tablero)
  <a href="{{url("/tablero/{$tablero->id}")}}">
    <div class="col-md-3 tablero">
      <p>{{$tablero->nombre}}</p>
    </div>
  </a>
@endforeach
