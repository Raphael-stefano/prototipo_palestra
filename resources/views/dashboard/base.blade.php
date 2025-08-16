@extends('dashboard-layout')

@section('conteudo')

    <main class="main-content">
        <header>
            <h1>Dashboard</h1>
            <span>Administrador</span>
        </header>
        <section class="content">
            <div class="breadcrumbs">Home / Usuários e Acessos</div>
            <a href="{{route('admin.cadastrar')}}" class="register-btn">Cadastrar Usuário</a>
            <div class="stats">
                <span>Total de Usuários: {{ $users->count() }}</span>
            </div>
            @yield('page')
        </section>
    </main>

@endsection
    