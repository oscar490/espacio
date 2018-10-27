@extends('app')



@section('content')

    <div class="row">
        <div class="col-md-4">
            <h1>Inicio de sesión</h1>
            <br>

            <form method="post" action="/autenticar">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>

                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <input type="submit" class="btn btn-success" value="inicio de sesión">
            </form>
        </div>
    </div>


@endsection