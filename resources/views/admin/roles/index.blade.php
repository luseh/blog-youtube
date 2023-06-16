@extends('adminlte::page')

@section('title', 'Blog')

@section('content_header')
    @can('admin.categories.create')
        <a class="btn btn-info float-right" href="{{ route('admin.roles.create') }}">Crear rol</a>
    @endcan
    <h1>Lista de roles</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{ $role->id }}</td>
                            <td>{{ $role->name }}</td>
                            <td width="10px">
                                @can('admin.roles.edit')
                                <a href="{{ route('admin.roles.edit', $role) }}" class="btn btn-primary">
                                    <i class="fas fa-pencil-alt" aria-hidden="true"></i>
                                </a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('admin.roles.destroy')
                                <form action="{{ route('admin.roles.destroy', $role) }}" method="post">
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

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop