@extends('layouts.app')

@section('title', 'Início')

@section('content')

{{-- HERO SECTION --}}
<section class="hero">
    <div class="hero-bg">
        <div class="hero-shape shape-1"></div>
        <div class="hero-shape shape-2"></div>
        <div class="hero-shape shape-3"></div>
    </div>
    <div class="hero-container">
        <div class="hero-content">
            <div class="hero-badge">
                <i class="bi bi-award-fill"></i>
                Ensino Técnico de Excelência
            </div>
            <h1 class="hero-title">
                Seu futuro<br>
                <span class="hero-highlight">começa aqui.</span>
            </h1>
            <p class="hero-desc">
                A ETEC Nova Era oferece cursos técnicos gratuitos de alta qualidade,
                preparando você para o mercado de trabalho com formação prática e teórica.
            </p>
            <div class="hero-actions">
                <a href="{{ route('cursos') }}" class="btn-primary">
                    <i class="bi bi-mortarboard-fill"></i>
                    Ver Cursos
                </a>
                <a href="{{ route('sobre') }}" class="btn-outline">
                    Conhecer a escola
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            <div class="hero-stats">
                <div class="stat">
                    <strong>+3.200</strong>
                    <span>Alunos</span>
                </div>
                <div class="stat-divider"></div>
                <div class="stat">
                    <strong>18</strong>
                    <span>Cursos</span>
                </div>
                <div class="stat-divider"></div>
                <div class="stat">
                    <strong>+25</strong>
                    <span>Anos</span>
                </div>
            </div>
        </div>
        <div class="hero-visual">
            <div class="hero-card floating">
                <i class="bi bi-laptop"></i>
                <div>
                    <strong>Tecnologia</strong>
                    <span>6 cursos disponíveis</span>
                </div>
            </div>
            <div class="hero-card floating delay-1">
                <i class="bi bi-heart-pulse"></i>
                <div>
                    <strong>Saúde</strong>
                    <span>4 cursos disponíveis</span>
                </div>
            </div>
            <div class="hero-card floating delay-2">
                <i class="bi bi-bar-chart-line"></i>
                <div>
                    <strong>Negócios</strong>
                    <span>5 cursos disponíveis</span>
                </div>
            </div>
            <div class="hero-central-badge">
                <i class="bi bi-star-fill"></i>
                <span>Ensino<br>Gratuito</span>
            </div>
        </div>
    </div>
</section>

{{-- NÚMEROS / DIFERENCIAIS --}}
<section class="diferenciais">
    <div class="section-container">
        <div class="diferencial-item">
            <div class="dif-icon"><i class="bi bi-book-fill"></i></div>
            <h3>Ensino Público</h3>
            <p>Cursos técnicos totalmente gratuitos financiados pelo Estado.</p>
        </div>
        <div class="diferencial-item">
            <div class="dif-icon"><i class="bi bi-tools"></i></div>
            <h3>Prática Real</h3>
            <p>Laboratórios modernos com equipamentos de última geração.</p>
        </div>
        <div class="diferencial-item">
            <div class="dif-icon"><i class="bi bi-briefcase-fill"></i></div>
            <h3>Empregabilidade</h3>
            <p>93% dos formandos empregados em até 6 meses após conclusão.</p>
        </div>
        <div class="diferencial-item">
            <div class="dif-icon"><i class="bi bi-people-fill"></i></div>
            <h3>Comunidade</h3>
            <p>Rede de ex-alunos e parcerias com mais de 200 empresas.</p>
        </div>
    </div>
</section>

{{-- CURSOS EM DESTAQUE --}}
<section class="section-cursos-destaque">
    <div class="section-container">
        <div class="section-header">
            <div class="section-tag">O que oferecemos</div>
            <h2 class="section-title">Cursos em <span>Destaque</span></h2>
            <p class="section-subtitle">Escolha o curso ideal para sua carreira e comece sua jornada.</p>
        </div>
        <div class="cursos-grid">
            @foreach($cursosDestaque as $curso)
                <x-curso-card :curso="$curso" />
            @endforeach
        </div>
        <div class="section-cta">
            <a href="{{ route('cursos') }}" class="btn-primary">
                Ver todos os cursos
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

{{-- BANNER INSCRIÇÃO --}}
<section class="banner-inscricao">
    <div class="banner-bg"></div>
    <div class="section-container banner-content">
        <div>
            <h2>Inscrições Abertas <span>2025</span></h2>
            <p>Vagas limitadas! Garanta sua vaga nos cursos técnicos gratuitos.</p>
        </div>
        <div class="banner-actions">
            <a href="{{ route('contato') }}" class="btn-white">
                <i class="bi bi-pencil-fill"></i>
                Quero me inscrever
            </a>
            <a href="{{ route('cursos') }}" class="btn-outline-white">
                Conhecer cursos
            </a>
        </div>
    </div>
</section>

{{-- NOTÍCIAS RECENTES --}}
<section class="section-noticias-home">
    <div class="section-container">
        <div class="section-header">
            <div class="section-tag">Fique por dentro</div>
            <h2 class="section-title">Últimas <span>Notícias</span></h2>
        </div>
        <div class="noticias-home-grid">
            @foreach($noticiasRecentes as $noticia)
            <article class="noticia-home-card">
                <div class="noticia-home-img" style="background: {{ $noticia['cor'] }}">
                    <i class="bi {{ $noticia['icone'] }}"></i>
                </div>
                <div class="noticia-home-body">
                    <span class="noticia-categoria">{{ $noticia['categoria'] }}</span>
                    <h3>{{ $noticia['titulo'] }}</h3>
                    <p>{{ Str::limit($noticia['resumo'], 100) }}</p>
                    <div class="noticia-meta">
                        <span><i class="bi bi-calendar3"></i> {{ $noticia['data'] }}</span>
                        <a href="{{ route('noticias.show', $noticia['slug']) }}" class="noticia-link">
                            Ler mais <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
        <div class="section-cta">
            <a href="{{ route('noticias') }}" class="btn-secondary">
                Todas as notícias <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

{{-- DEPOIMENTOS --}}
<section class="section-depoimentos">
    <div class="section-container">
        <div class="section-header">
            <div class="section-tag">Histórias reais</div>
            <h2 class="section-title">O que dizem <span>nossos alunos</span></h2>
        </div>
        <div class="depoimentos-grid">
            <div class="depoimento-card">
                <div class="depoimento-stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>"O curso de Desenvolvimento de Sistemas mudou minha vida. Hoje trabalho numa startup incrível e tudo começou aqui na ETEC."</p>
                <div class="depoimento-autor">
                    <div class="depoimento-avatar">MB</div>
                    <div>
                        <strong>Marina Bezerra</strong>
                        <span>Dev Backend – Formada 2023</span>
                    </div>
                </div>
            </div>
            <div class="depoimento-card destaque">
                <div class="depoimento-stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>"Professores excepcionais, laboratórios modernos e um ambiente que estimula o crescimento. A ETEC prepara de verdade para o mercado."</p>
                <div class="depoimento-autor">
                    <div class="depoimento-avatar">RC</div>
                    <div>
                        <strong>Rafael Costa</strong>
                        <span>Analista de Redes – Formado 2022</span>
                    </div>
                </div>
            </div>
            <div class="depoimento-card">
                <div class="depoimento-stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>"Fiz o curso de Enfermagem e já estou atuando na área. O aprendizado prático fez toda a diferença na minha formação."</p>
                <div class="depoimento-autor">
                    <div class="depoimento-avatar">JS</div>
                    <div>
                        <strong>Julia Santos</strong>
                        <span>Técnica em Enfermagem – Formada 2024</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection