<div>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td class="float-right">
                                <a class="btn btn-info" href="{{ route('admin.users.edit', $user) }}"><i class="fa fa-pencil-alt"></i></a>
                                <a class="btn btn-danger" href="{{ route('admin.users.destroy', $user) }}"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>    
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $users->links() }}
        </div>
    </div>
</div>
