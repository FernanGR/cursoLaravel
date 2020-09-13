@extends('layout')

@section('title', "Usuario {$user->id}")

@section('content')
  <div class="card">
    <div class="card-header text-secondary  h1">
      Usuario #{{ $user->id }}
    </div>
    <div class="card-body">
      <p>Nombre del usuario: {{ $user->name }}</p>
      <p>Correo electrónico: {{ $user->email }}</p>


          <a href="{{ route('users.index') }}">Regresar al listado de usuarios</a>

    </div>
  </div>


@endsection
