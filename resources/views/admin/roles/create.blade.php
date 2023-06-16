@extends('adminlte::page')

@section('title', 'Blog')

@section('content_header')
    <h1>Crear nuevos roles</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.roles.store']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre: ') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del rol...']) !!}
                </div>

                <h2 class="h3">Lista de persmisos</h2>
                @foreach ($permissions as $permission)
                    <div>
                        <label>
                            {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!} 
                            {{ $permission->description }}   
                        </label>
                    </div>
                @endforeach
                
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