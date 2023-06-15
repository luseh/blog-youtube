<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese el nombre o correo de un usuario...">
        </div>
        @if ($users->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Roles Activos</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @foreach ($user->roles as $role)
                                        @if ($role->name == 'Admin')
                                            <span class="badge badge-warning text-md">{{ $role->name }}</span>
                                        @else
                                            <span class="badge badge-success text-md">{{ $role->name }}</span>
                                        @endif
                                    @endforeach
                                </td>
                                <td class="float-right">
                                    <a class="btn btn-info" href="{{ route('admin.users.edit', $user) }}"><i class="fa fa-pencil-alt"></i></a>
                                </td>
                            </tr>    
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $users->links() }}
            </div>
        @else
            <div class="card-body">
                <strong>No hay registros que correspondan con tu búsqueda.</strong>
            </div>
        @endif
    </div>
</div>
