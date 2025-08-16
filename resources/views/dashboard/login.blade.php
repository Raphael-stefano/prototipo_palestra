@extends('dashboard-layout')

@section('conteudo')

    <main class="main-content" style="display: flex; justify-content: center; align-items: center;">
        @if (session('error'))
            <p style="color: red;">{{ session('error') }}</p>
        @endif
        <div class="form-box">
            <h3>Autentique-se para entrar no dashboard</h3>
            <p>Para acessar o dashboard é necessário estar autenticado</p>
            <form action="{{ route('admin.authenticate') }}" method="post">
                @csrf
                <input type="text" name="username" placeholder="Username" required>
                @error('username')
                    <div class="error">{{ $message }}</div>
                @enderror
                <input type="password" name="password" placeholder="Senha" required>
                @error('password')
                    <div class="error">{{ $message }}</div>
                @enderror
                <button type="submit">Acessar o Dashboard</button>
            </form>
        </div>
    </main>

@endsection