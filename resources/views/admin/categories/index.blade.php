@extends('adminlte::page')

@section('title', 'Blog')

@section('content_header')
    @can('admin.categories.create')
        <a class="btn btn-info btn-sm float-right" href="{{ route('admin.categories.create') }}">Crear categoría</a>
    @endcan
    <h1>Lista de categorías</h1>
@stop

@section('content')

    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">

                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2">
                        @can('admin.categories.create')
                        Actions
                        @endcan
                    </th>
                </thead>

                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td width="10px">
                                @can('admin.categories.edit')
                                <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-primary">
                                    <i class="fas fa-pencil-alt" aria-hidden="true"></i>
                                </a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('admin.categories.destroy')
                                <form action="{{ route('admin.categories.destroy', $category) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-trash-alt"></i>    
                                    </button> 
                                </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
@stop
