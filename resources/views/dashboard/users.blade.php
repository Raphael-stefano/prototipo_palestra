@extends('dashboard.base')

@section('page')

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->telephone }}</td>
                    <td><a href="{{ route('users.edit', $user->id) }}" class="edit-btn">Editar</a></td>
                    <td><a href="{{ route('users.destroy', $user->id) }}" class="delete-btn" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection