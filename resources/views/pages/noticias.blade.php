@extends('layouts.app')

@section('title', 'Notícias')

@section('content')

<section class="page-hero">
    <div class="page-hero-bg"></div>
    <div class="section-container">
        <div class="breadcrumb">
            <a href="{{ route('home') }}">Início</a>
            <i class="bi bi-chevron-right"></i>
            <span>Notícias</span>
        </div>
        <h1 class="page-hero-title">Notícias e <span>Eventos</span></h1>
        <p class="page-hero-desc">Fique por dentro de tudo que acontece na ETEC Nova Era.</p>
    </div>
</section>

{{-- NOTICIA DESTAQUE --}}
<section class="section-noticia-destaque">
    <div class="section-container">
        <div class="noticia-destaque-card">
            <div class="noticia-destaque-visual" style="background: {{ $noticiaDestaque['cor'] }}">
                <i class="bi {{ $noticiaDestaque['icone'] }}"></i>
                <span class="destaque-badge">Em Destaque</span>
            </div>
            <div class="noticia-destaque-body">
                <span class="noticia-categoria">{{ $noticiaDestaque['categoria'] }}</span>
                <h2>{{ $noticiaDestaque['titulo'] }}</h2>
                <p>{{ $noticiaDestaque['resumo'] }}</p>
                <div class="noticia-info">
                    <span><i class="bi bi-person-fill"></i> {{ $noticiaDestaque['autor'] }}</span>
                    <span><i class="bi bi-calendar3"></i> {{ $noticiaDestaque['data'] }}</span>
                    <span><i class="bi bi-clock"></i> {{ $noticiaDestaque['leitura'] }} de leitura</span>
                </div>
                <a href="{{ route('noticias.show', $noticiaDestaque['slug']) }}" class="btn-primary">
                    Ler notícia completa <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- TODAS AS NOTICIAS --}}
<section class="section-noticias-lista">
    <div class="section-container">
        <div class="section-header">
            <h2 class="section-title">Todas as <span>Publicações</span></h2>
        </div>
        <div class="noticias-lista-grid">
            @foreach($noticias as $noticia)
            <article class="noticia-lista-card">
                <div class="noticia-lista-visual" style="background: {{ $noticia['cor'] }}">
                    <i class="bi {{ $noticia['icone'] }}"></i>
                </div>
                <div class="noticia-lista-body">
                    <div class="noticia-lista-meta">
                        <span class="noticia-categoria small">{{ $noticia['categoria'] }}</span>
                        <span class="noticia-data"><i class="bi bi-calendar3"></i> {{ $noticia['data'] }}</span>
                    </div>
                    <h3>{{ $noticia['titulo'] }}</h3>
                    <p>{{ Str::limit($noticia['resumo'], 120) }}</p>
                    <div class="noticia-lista-footer">
                        <span class="noticia-autor"><i class="bi bi-person"></i> {{ $noticia['autor'] }}</span>
                        <a href="{{ route('noticias.show', $noticia['slug']) }}" class="link-ler-mais">
                            Ler mais <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>

@endsection