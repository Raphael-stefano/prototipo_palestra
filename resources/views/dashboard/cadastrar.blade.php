@extends('dashboard-layout')

@section('conteudo')

    <main class="main-content" style="display: flex; justify-content: center; align-items: center;">
        <div class="form-box">
            <h3>Essa página serve para o Administrador cadastrar outros usuários</h3>
            <p>Preencha o formulário abaixo para cadastrar usuários que por alguma razao nao possam realizar o próprio cadastro.</p>
            <form action="{{ route('users.store') }}" method="post">
                @csrf
                <input type="text" name="name" placeholder="Nome do usuário" required>
                @error('name')
                    <x-box-alert>{{ $message }}</x-box-alert>
                @enderror
                <input type="email" name="email" placeholder="E-mail do usuário" required>
                @error('email')
                    <x-box-alert>{{ $message }}</x-box-alert>
                @enderror
                <input type="tel" name="telephone" placeholder="Whatsapp do usuário" required>
                @error('telephone')
                    <x-box-alert>{{ $message }}</x-box-alert>
                @enderror
                <button type="submit">Garantir Minha Vaga Agora</button>
            </form>
        </div>
    </main>

@endsection