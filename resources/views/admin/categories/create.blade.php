@extends('adminlte::page')

@section('title', 'Blog')

@section('content_header')
    <h1>Crear nueva categoría</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'admin.categories.store']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la categoria']) !!}

                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror


                </div>

                <div class="form-group">
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la categoria', 'readonly']) !!}

                    @error('slug')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                
                </div>


                {!! Form::submit('Crear categoría', ['class' => 'btn btn-info']) !!}

            {!! Form::close() !!}

        </div>
    </div>
@stop

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

    <script>
        $(document).ready(function(){
            $('#name').stringToSlug({
                setEvent: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@stop

