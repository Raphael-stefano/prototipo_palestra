<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <h2>Menu</h2>
            <div class="admin-section">Administração</div>
            <ul>
                <li><a href="{{ route('admin.users') }}">Usuários</a></li>
                <li><a href="#">Acessos</a></li>
            </ul>
        </aside>

        @yield('conteudo')

    </div>
</body>
</html>
