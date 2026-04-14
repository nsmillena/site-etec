@props(['curso'])

<article class="curso-card">
    <div class="curso-card-header" style="background: {{ $curso['cor'] ?? '#0f4c81' }}">
        <div class="curso-icon">
            <i class="bi {{ $curso['icone'] }}"></i>
        </div>
        <span class="curso-area">{{ $curso['area'] }}</span>
    </div>
    <div class="curso-card-body">
        <h3>{{ $curso['nome'] }}</h3>
        <p>{{ $curso['descricao'] }}</p>
        <div class="curso-meta">
            <span><i class="bi bi-clock"></i> {{ $curso['duracao'] }}</span>
            <span><i class="bi bi-calendar3"></i> {{ $curso['turno'] }}</span>
        </div>
    </div>
    <div class="curso-card-footer">
        <a href="{{ route('cursos') }}" class="btn-saiba-mais">
            Saiba mais <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</article>