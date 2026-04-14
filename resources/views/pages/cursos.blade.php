@extends('layouts.app')

@section('title', 'Cursos')

@section('content')

{{-- PAGE HERO --}}
<section class="page-hero">
    <div class="page-hero-bg"></div>
    <div class="section-container">
        <div class="breadcrumb">
            <a href="{{ route('home') }}">Início</a>
            <i class="bi bi-chevron-right"></i>
            <span>Cursos</span>
        </div>
        <h1 class="page-hero-title">Nossos <span>Cursos Técnicos</span></h1>
        <p class="page-hero-desc">Escolha o curso ideal para o seu futuro. Todos gratuitos e com alta empregabilidade.</p>
    </div>
</section>

{{-- FILTROS --}}
<section class="section-filtros">
    <div class="section-container">
        <div class="filtros-wrapper">
            <button class="filtro-btn active" data-filtro="todos">Todos</button>
            @foreach($areas as $area)
                <button class="filtro-btn" data-filtro="{{ Str::slug($area) }}">{{ $area }}</button>
            @endforeach
        </div>
    </div>
</section>

{{-- CURSOS GRID --}}
<section class="section-cursos-full">
    <div class="section-container">
        <div class="cursos-grid-full" id="cursos-grid">
            @foreach($cursos as $curso)
            <article class="curso-card-full" data-area="{{ Str::slug($curso['area']) }}">
                <div class="curso-card-accent" style="background: {{ $curso['cor'] }}"></div>
                <div class="curso-card-full-header">
                    <div class="curso-icon-lg" style="background: {{ $curso['cor'] }}20; color: {{ $curso['cor'] }}">
                        <i class="bi {{ $curso['icone'] }}"></i>
                    </div>
                    <span class="curso-area-badge" style="background: {{ $curso['cor'] }}15; color: {{ $curso['cor'] }}">
                        {{ $curso['area'] }}
                    </span>
                </div>
                <h3>{{ $curso['nome'] }}</h3>
                <p>{{ $curso['descricao'] }}</p>
                <div class="curso-detalhes">
                    <div class="detalhe-item">
                        <i class="bi bi-clock-fill"></i>
                        <div>
                            <span class="detalhe-label">Duração</span>
                            <span class="detalhe-valor">{{ $curso['duracao'] }}</span>
                        </div>
                    </div>
                    <div class="detalhe-item">
                        <i class="bi bi-sun-fill"></i>
                        <div>
                            <span class="detalhe-label">Turno</span>
                            <span class="detalhe-valor">{{ $curso['turno'] }}</span>
                        </div>
                    </div>
                    <div class="detalhe-item">
                        <i class="bi bi-people-fill"></i>
                        <div>
                            <span class="detalhe-label">Vagas</span>
                            <span class="detalhe-valor">{{ $curso['vagas'] }} por turma</span>
                        </div>
                    </div>
                </div>
                <div class="curso-habilidades">
                    <span class="hab-label">Habilidades:</span>
                    @foreach($curso['habilidades'] as $hab)
                        <span class="hab-tag">{{ $hab }}</span>
                    @endforeach
                </div>
                <a href="{{ route('contato') }}" class="btn-inscrever" style="background: {{ $curso['cor'] }}">
                    <i class="bi bi-pencil-fill"></i>
                    Quero me inscrever
                </a>
            </article>
            @endforeach
        </div>
    </div>
</section>

{{-- BANNER DUVIDAS --}}
<section class="banner-duvidas">
    <div class="section-container banner-duvidas-content">
        <div class="bd-icon"><i class="bi bi-question-circle-fill"></i></div>
        <div>
            <h3>Ainda tem dúvidas sobre qual curso escolher?</h3>
            <p>Nossa equipe de orientação vocacional está pronta para te ajudar a encontrar o caminho certo.</p>
        </div>
        <a href="{{ route('contato') }}" class="btn-primary">
            Falar com orientador
            <i class="bi bi-chat-fill"></i>
        </a>
    </div>
</section>

@endsection

@section('scripts')
<script>
    // Filtro de cursos
    const filtros = document.querySelectorAll('.filtro-btn');
    const cards = document.querySelectorAll('.curso-card-full');

    filtros.forEach(btn => {
        btn.addEventListener('click', () => {
            filtros.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            const filtro = btn.dataset.filtro;
            cards.forEach(card => {
                if (filtro === 'todos' || card.dataset.area === filtro) {
                    card.style.display = 'flex';
                    card.style.animation = 'fadeInUp 0.3s ease';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
</script>
@endsection