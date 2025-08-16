@extends('layout')

@section('title', 'Home')

@section('content')

    {{-- Topo com Timer --}}
    <div class="top-bar">
        <span style="position: absolute; left: 150px;">NeuroSlim</span>
        <span>Evento começa em:</span>
        <span class="timer" id="countdown">01:14:35:23</span>
    </div>

    {{-- Seção principal --}}
    <section class="hero">
        <div class="hero-text">
            <h1><span style="color: white;">Desbloqueie Sua Mente para o</span> Emagrecimento Definitivo</h1>
            <p>Descubra o que está sabotando seu corpo todos os dias e aprenda uma abordagem leve, inteligente e consciente para emagrecer de dentro para fora, mesmo que você já tenha tentado de tudo antes.</p>
            <p style="font-weight: bold;"><span class="hero-pill-span">Webinar Gratuito e Exclusivo</span> para mulheres que buscam uma transformação real e duradoura.</p>
        </div>
        <div class="form-box">
            <h3>Garanta Sua Vaga no Webinar Exclusivo</h3>
            <p>Preencha o formulário abaixo para garantir sua participação.</p>
            <form action="{{ route('group') }}">
                <input type="text" placeholder="Seu Nome" required>
                <input type="email" placeholder="Digite seu melhor e-mail" required>
                <input type="tel" placeholder="(DDD) Whatsapp" required>
                <button type="submit">Garantir Minha Vaga Agora</button>
            </form>
            <small style="display:block;margin-top:10px;font-size:0.8rem;color:#a79a9a;text-align: center;">
                <i class="bi bi-lock-fill"></i> 100% Livre de Spam
            </small>
            <small style="display:block;margin-top:10px;font-size:0.8rem;color:#a79a9a;text-align: center;font-size: 0.8em">
                "One of the best decisions in my professional life, I'm really greatful for this content"
            </small>
            <small style="display:block;margin-top:10px;font-size:0.8rem;color:#a79a9a;text-align: center;">
                Joe Doe - Coach
            </small>
        </div>
    </section>

    {{-- Desafios --}}
    <section class="challenges">
        <h2>Você se identifica com <span style="color: #005c51;">algum desses desafios</span>?</h2>
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
                description="Falta de autoconfiança que te impede de cuidar de voce mesma como merece" 
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
        <h2>O que você vai <span style="color: #005c51;">descobrir</span> neste webinar?</h2>
        <div>
            <ul class="heart-list">
                <li>Os 3 bloqueios mentais que impedem seu emagrecimento, mesmo quando você faz dieta e exercícios.</li>
                <li>Como quebrar o ciclo de autossabotagem que te mantém presa no efeito sanfona.</li>
                <li>A técnica de 5 minutos diários para reduzir a ansiedade e a compulsão alimentar.</li>
                <li>Como reprogramar sua mente para escolhas alimentares conscientes sem sofrimento.</li>
                <li>O segredo para transformar sua relação com a comida e com seu corpo de forma definitiva.</li>
            </ul>
            <a href="#" class="cta">É isso que eu quero! >>></a>
        </div>
        <p><strong>Esse nao é mais um método de emagrecimento.</strong> É uma abordagem que vai te ensinar a desbloquear o poder da sua mente para conquistar o corpo que voce deseja, sem dietas malucas ou exercícios exaustivos.</p>
    </section>

@endsection