@extends('template')


@section('title')
    Estudiantes
@endsection


@section('content')

<form action="{{url('student')}}" method="POST">
    @csrf
    <input 
    type = "text"
    name = "name_student"
    placeholder="Nombre"
    >
    @error('name_student')
    <div style="color:red">{{$message}}</div>     
    @enderror
    <input 
    type = "text"
    name = "id_student"
    placeholder="Matricula"
    >
    <input 
    type = "email"
    name = "email_student"
    placeholder="Correo"
    >
    <input 
    type = "password"
    name = "password_student"
    placeholder="Contraseña"
    >
    <button type="submit">Enviar</button>

</form>

@endsection