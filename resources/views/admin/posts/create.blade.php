@extends('adminlte::page')

@section('title', 'Blog')

@section('content_header')
    <h1>Crear un nuevo post</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'admin.posts.store', 'autocomplete' => 'off', 'files' => 'true']) !!}

            @include('admin.posts.partials.form')

            {!! Form::submit('Crear post', ['class' => 'btn btn-secondary']) !!}

            {!! Form::close() !!}

        </div>
    </div>
@stop

@section('css')

    <style>
        .image-wrapper {
            position: relative;
            padding-bottom: 55%;
        }

        .image-wrapper img {
            position: absolute;
            object-fit: cover;
            width: 90%;
            height: 90%;
            box-shadow: 6px 6px 6px lightblue;
        }
        
        .col-image > .form-group {
            padding-right: 10%;
        }
    </style>

@stop

@section('js')

    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#name').stringToSlug({
                setEvent: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });

        ClassicEditor
            .create(document.querySelector('#extract'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#body'))
            .catch(error => {
                console.error(error);
            });

        // Actualizar imagen previsualizada
        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event) {
            var file = event.target.files[0];
            var reader = new FileReader();
            
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        }
    </script>
@stop
