@extends('layout')

@section('title', "Crear usuario")

@section('content')
    <h1>Crear usuario</h1>

    <?php //dd($errors) ?>

    @if($errors->any())
      <div class="alert alert-danger">
        <h6>Por favor corrige los errores de abajo: </h6>
      {{-- <ul>
        @foreach ($errors->all() as $error)
            <li> {{ $error }}</li>
          @endforeach
      </ul> --}}
    </div>

    @endif

    <form method="POST" action="{{ url('usuarios/') }}">
        {{ csrf_field() }}


        <label for="name">Nombre:</label>
        <input type="text" name="name" value="{{ old('name') }}" id="name" placeholder="Pedro Perez">
        <div class="text-danger">
          @if ($errors->has('name'))
            <p>{{ $errors->first('name') }}</p>
          @endif
        </div>
        <br>
        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" value="{{ old('email') }}" id="email" placeholder="Pedro@example.com">
        <div class="text-danger">
          @if ($errors->has('email'))
            <p>{{ $errors->first('email') }}</p>
          @endif
        </div>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" value="" id="password" placeholder="Mayor a 6 caracteres">
        <div class="text-danger">
          @if ($errors->has('password'))
            <p>{{ $errors->first('password') }}</p>
          @endif
        </div>
        <br>
        <button type="submit">Crear usuario</button>

    </form>

    <p>
        <a href="{{ route('users.index') }}">Regresar al listado de usuarios</a>
    </p>
@endsection
