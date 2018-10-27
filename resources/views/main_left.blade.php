{{-- Menú izquierda --}}

<div class="col-md-2">
    <div class="row">
      <div class="main_item" data-item="tableros">
          Tableros
      </div>

      <div class="main_item" data-item="home">
          Inicio
      </div>

      @foreach ($equipos as $equipo)
        <div class="main_item" data-item="{{strtolower($equipo->nombre)}}">
          {{$equipo->nombre}}
        </div>
      @endforeach

    </div>
</div>
