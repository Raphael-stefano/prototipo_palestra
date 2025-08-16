@extends('layout')

@section('title', 'Confirmaçao')

@section('content')

    <div class="confirmation-page">

        @if (session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif

        <div class="confirmation-container">
            <p class="greeting">❤️ Inscrição Confirmada! 👍</p>
    
            <h1>DESBLOQUEIE SUA MENTE PARA O EMAGRECIMENTO</h1>
            <h2>Descubra o que está sabotando seu corpo todos os dias</h2>
    
            <p class="highlight">🚨 Agora só falta um passo essencial:</p>
            <h2>Entre no grupo exclusivo do WhatsApp e dê o próximo passo rumo à transformação!</h2>
    
            <a href="https://chat.whatsapp.com/GmlOo3Fmj8a49t9vUeW4l2?mode=ac_t" class="btn-whatsapp" style="text-transform: uppercase">Entrar no grupo do WhatsApp agora</a>
    
            <h2>Por que entrar no grupo é tão importante?</h2>
    
            <ul class="check-list">
                <li>Receber lembretes do evento</li>
                <li>Acesso antecipado ao eBook “Corpo que Sente, Alma que Come”</li>
                <li>Participar de dinâmicas preparatórias exclusivas</li>
                <li>Conectar-se com outras mulheres na mesma jornada</li>
                <li>Receber suporte emocional e inspiração diária</li>
            </ul>
    
            <div class="info-box">
                💬 O grupo de WhatsApp é o seu canal direto para essa transformação!<br>
                Lá você vai receber lembretes, materiais exclusivos e interagir com outras mulheres que também estão prontas para mudar a relação com a comida e com o corpo.
            </div>
    
            <div class="footer">
                Essa pode ser a virada que você esperava há anos.<br>
                Você não está sozinha.<br>
                Juntas, vamos ressignificar sua relação com a comida, com seu corpo e com você mesma.<br><br>
                Com carinho,<br>
                Equipe NeuroSlim
            </div>
        </div>
    </div>

@endsection