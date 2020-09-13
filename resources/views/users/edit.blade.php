@extends('layout')

@section('title', "Crear usuario")

@section('content')



    <div class="card">
      <div class="card-header h1">
        Editar usuario
        </div>
        <div class="card-body">

             @if($errors->any())
               <div class="alert alert-danger">
                 <h6>Por favor corrige los errores de abajo: </h6>
               <ul>
                 @if ($errors->has('name'))
                   <p>{{ $errors->first('name') }}</p>
                 @endif
               </ul>
             </div>

             @endif

             <form method="POST" action="{{ url("usuarios/{$user->id}") }}">
               {{ method_field('PUT')}}
                 {{ csrf_field() }}


                 <label for="name">Nombre:</label>
                 <input type="text" name="name" value="{{ old('name', $user->name) }}" id="name" placeholder="Pedro Perez">
                 <div class="text-danger">

                 </div>
                 <br>
                 <label for="email">Correo electrónico:</label>
                 <input type="email" name="email" value="{{ old('email', $user->email) }}" id="email" placeholder="Pedro@example.com">
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
                 <button type="submit" class="btn btn-primary">Actualizar usuario</button>
                 <a href="{{ route('users.index') }}" class="btn btn-link">Regresar al listado de usuarios</a>

             </form>

         </div>

@endsection
