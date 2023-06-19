@extends('adminlte::page')

@section('title', 'Blog')

@section('content_header')
    <h1>Crear nuevos roles</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.roles.store']) !!}
                
            @include('admin.roles.partials.form')
                
                {!! Form::submit('Agregar rol', ['class' => 'btn btn-info']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop