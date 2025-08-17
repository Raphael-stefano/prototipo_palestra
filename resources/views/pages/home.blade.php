@extends('layout')

@section('title', 'NeuroSlim')

@section('content')

    {{-- Topo com Timer --}}
    <div class="container-top-bar">
        <div class="top-bar">
            <img class="logo" src="{{ asset('images/logo.png') }}" alt="logo NeuroSlim">
            <x-outdoor-number targetDate="2025-08-25 20:30:00" />
        </div>
    </div>

    {{-- Seção principal --}}
    <section class="container-hero">
        <div class="hero">
            <div class="hero-text hero-large">
                <h1>Desbloqueie Sua Mente para o <strong>Emagrecimento Definitivo</strong></h1>
                <p>Descubra o que está sabotando seu corpo todos os dias e aprenda uma abordagem leve, inteligente e consciente para emagrecer de dentro para fora, mesmo que você já tenha tentado de tudo antes.</p>
                <p class="hero-pill"><strong class="hero-pill-strong">Webinar Gratuito e Exclusivo</strong> para mulheres que buscam uma transformação real e duradoura.</p>
            </div>
            <div class="hero-text hero-mobile">
                <h1>Desbloqueie Sua Mente para o <strong>Emagrecimento Definitivo</strong></h1>
            </div>
            <div id="form-box" class="form-box">
                <h3>Garanta Sua Vaga no Webinar Exclusivo</h3>
                <p>Preencha o formulário abaixo para garantir sua participação.</p>
                <form class="form" action="{{ route('users.store') }}" method="post">
                    @csrf
                    <input type="text" name="name" placeholder="Seu Nome" required>
                    @error('name')
                        <x-box-alert>{{ $message }}</x-box-alert>
                    @enderror
                    <input type="email" name="email" placeholder="Digite seu melhor e-mail" required>
                    @error('email')
                        <x-box-alert>{{ $message }}</x-box-alert>
                    @enderror
                    <input type="tel" name="telephone" placeholder="(DDD) Whatsapp" required>
                    @error('telephone')
                        <x-box-alert>{{ $message }}</x-box-alert>
                    @enderror
                    <button type="submit">Garantir Minha Vaga Agora</button>
                </form>
                <div class="subtitle">
                    <small>
                        <i class="bi bi-lock-fill"></i> 100% Livre de Spam
                    </small>
                    <small>
                        <strong>"One of the best decisions in my professional life, I'm really greatful for this content"</strong>
                    </small>
                    <small>
                        Joe Doe - Coach
                    </small>
                </div>
            </div>
            <div class="hero-text hero-mobile">
                <p>Descubra o que está sabotando seu corpo todos os dias e aprenda uma abordagem leve, inteligente e consciente para emagrecer de dentro para fora, mesmo que você já tenha tentado de tudo antes.</p>
                <p class="hero-pill"><strong class="hero-pill-strong">Webinar Gratuito e Exclusivo</strong> para mulheres que buscam uma transformação real e duradoura.</p>
            </div>
        </div>
    </section>

    <div class="container-challenges_and_discover">
        {{-- Desafios --}}
        <section class="challenges">
            <h2>Você se identifica com <span>algum desses desafios</span>?</h2>
            <div class="challenges-grid">
                <x-challenge-card
                    icon="bi-moon-fill"
                    title="Ansiedade que sabota sua alimentação"
                    description="Come sem fome emocional e depois se sente culpada pelo descontrole"
                />
                <x-challenge-card
                    icon="bi-cloud-fill"
                    title="Insônia que desregula seu metabolismo"
                    description="Noites mal dormidas aumentando sua fome e dificultando o emagrecimento"
                />
                <x-challenge-card
                    icon="bi-heartbreak-fill"
                    title="Baixa autoestima e autossabotagem"
                    description="Falta de confiança que te impede de cuidar de voce mesma como merece"
                />
                <x-challenge-card
                    icon="bi-cookie"
                    title="Compulsão alimentar e dietas fracassadas"
                    description="Já tentou de tudo, mas nada funciona a longo prazo"
                />
            </div>
        </section>
        {{-- Descobrir no Webinar --}}
        <section class="discover">
            <h3>O que você vai <span>descobrir</span> neste webinar?</h3>
            <div>
                <ul class="heart-list">
                    <li>Os 3 bloqueios mentais que impedem seu emagrecimento, mesmo quando você faz dieta e exercícios.</li>
                    <li>Como quebrar o ciclo de autossabotagem que te mantém presa no efeito sanfona.</li>
                    <li>A técnica de 5 minutos diários para reduzir a ansiedade e a compulsão alimentar.</li>
                    <li>Como reprogramar sua mente para escolhas alimentares conscientes sem sofrimento.</li>
                    <li>O segredo para transformar sua relação com a comida e com seu corpo de forma definitiva.</li>
                </ul>
                <a href="#form-box" class="cta">É isso que eu quero! >>></a>
            </div>
            <p><strong>Esse nao é mais um método de emagrecimento.</strong> É uma abordagem que vai te ensinar a desbloquear o poder da sua mente para conquistar o corpo que voce deseja, sem dietas malucas ou exercícios exaustivos.</p>
        </section>
    </div>

@endsection