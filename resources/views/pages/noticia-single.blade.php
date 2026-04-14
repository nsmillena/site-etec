@extends('layouts.app')

@section('title', $noticia['titulo'])

@section('content')

<section class="page-hero small">
    <div class="page-hero-bg"></div>
    <div class="section-container">
        <div class="breadcrumb">
            <a href="{{ route('home') }}">Início</a>
            <i class="bi bi-chevron-right"></i>
            <a href="{{ route('noticias') }}">Notícias</a>
            <i class="bi bi-chevron-right"></i>
            <span>{{ Str::limit($noticia['titulo'], 40) }}</span>
        </div>
    </div>
</section>

<section class="section-post">
    <div class="section-container post-layout">

        {{-- ARTIGO --}}
        <article class="post-article">
            <div class="post-header">
                <span class="noticia-categoria">{{ $noticia['categoria'] }}</span>
                <h1>{{ $noticia['titulo'] }}</h1>
                <div class="post-meta">
                    <span><i class="bi bi-person-fill"></i> {{ $noticia['autor'] }}</span>
                    <span><i class="bi bi-calendar3"></i> {{ $noticia['data'] }}</span>
                    <span><i class="bi bi-clock"></i> {{ $noticia['leitura'] }} de leitura</span>
                </div>
            </div>

            <div class="post-visual" style="background: {{ $noticia['cor'] }}">
                <i class="bi {{ $noticia['icone'] }}"></i>
            </div>

            <div class="post-body">
                {!! $noticia['conteudo'] !!}
            </div>

            <div class="post-footer">
                <a href="{{ route('noticias') }}" class="btn-outline">
                    <i class="bi bi-arrow-left"></i> Voltar para Notícias
                </a>
            </div>
        </article>

        {{-- SIDEBAR --}}
        <aside class="post-sidebar">
            <div class="sidebar-widget">
                <h4>Outras Notícias</h4>
                @foreach($outrasNoticias as $outra)
                <a href="{{ route('noticias.show', $outra['slug']) }}" class="sidebar-noticia">
                    <div class="sidebar-noticia-icon" style="background: {{ $outra['cor'] }}">
                        <i class="bi {{ $outra['icone'] }}"></i>
                    </div>
                    <div>
                        <span class="sidebar-categoria">{{ $outra['categoria'] }}</span>
                        <p>{{ Str::limit($outra['titulo'], 55) }}</p>
                        <small>{{ $outra['data'] }}</small>
                    </div>
                </a>
                @endforeach
            </div>
            <div class="sidebar-widget sidebar-cta">
                <i class="bi bi-mortarboard-fill"></i>
                <h4>Inscrições Abertas!</h4>
                <p>Vagas limitadas para 2025. Garanta já a sua!</p>
                <a href="{{ route('contato') }}" class="btn-primary">Inscreva-se</a>
            </div>
        </aside>

    </div>
</section>

@endsection