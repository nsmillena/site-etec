@extends('layouts.app')

@section('title', 'Sobre a ETEC')

@section('content')

{{-- PAGE HERO --}}
<section class="page-hero">
    <div class="page-hero-bg"></div>
    <div class="section-container">
        <div class="breadcrumb">
            <a href="{{ route('home') }}">Início</a>
            <i class="bi bi-chevron-right"></i>
            <span>Sobre</span>
        </div>
        <h1 class="page-hero-title">Sobre a <span>ETEC Nova Era</span></h1>
        <p class="page-hero-desc">Conheça nossa história, missão e os valores que nos guiam há mais de 25 anos.</p>
    </div>
</section>

{{-- MISSÃO, VISÃO, VALORES --}}
<section class="section-mvv">
    <div class="section-container">
        <div class="mvv-grid">
            <div class="mvv-card missao">
                <div class="mvv-icon"><i class="bi bi-bullseye"></i></div>
                <h3>Missão</h3>
                <p>Oferecer educação técnica pública de excelência, formando profissionais competentes, cidadãos críticos e comprometidos com o desenvolvimento social e econômico do Brasil.</p>
            </div>
            <div class="mvv-card visao">
                <div class="mvv-icon"><i class="bi bi-eye-fill"></i></div>
                <h3>Visão</h3>
                <p>Ser referência nacional em educação técnica, reconhecida pela inovação pedagógica, excelência nos resultados e pelo impacto positivo na vida dos alunos e da comunidade.</p>
            </div>
            <div class="mvv-card valores">
                <div class="mvv-icon"><i class="bi bi-gem"></i></div>
                <h3>Valores</h3>
                <ul>
                    <li><i class="bi bi-check2-circle"></i> Excelência no ensino</li>
                    <li><i class="bi bi-check2-circle"></i> Inovação e criatividade</li>
                    <li><i class="bi bi-check2-circle"></i> Inclusão e diversidade</li>
                    <li><i class="bi bi-check2-circle"></i> Ética e responsabilidade</li>
                    <li><i class="bi bi-check2-circle"></i> Respeito ao próximo</li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- HISTORIA --}}
<section class="section-historia">
    <div class="section-container">
        <div class="historia-content">
            <div class="historia-text">
                <div class="section-tag">Nossa trajetória</div>
                <h2>Uma história de <span>transformação</span></h2>
                <p>Fundada em 1998, a ETEC Nova Era nasceu do compromisso do Estado com a educação pública de qualidade. Em mais de 25 anos de história, formamos mais de 15.000 profissionais que hoje atuam nos mais diversos setores da economia.</p>
                <p>Nossa escola nasceu em um momento em que o Brasil precisava de profissionais qualificados para atender a demanda crescente do mercado de trabalho. Com uma proposta pedagógica inovadora, sempre combinamos teoria sólida com prática intensiva.</p>
                <p>Hoje, somos referência em ensino técnico, com infraestrutura de ponta, professores altamente qualificados e uma metodologia que prepara nossos alunos para os desafios do século XXI.</p>
                <div class="historia-numeros">
                    <div class="num-item">
                        <strong>1998</strong>
                        <span>Fundação</span>
                    </div>
                    <div class="num-item">
                        <strong>+15.000</strong>
                        <span>Formados</span>
                    </div>
                    <div class="num-item">
                        <strong>+200</strong>
                        <span>Parceiros</span>
                    </div>
                </div>
            </div>
            <div class="historia-timeline">
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <span class="timeline-year">1998</span>
                        <h4>Fundação da ETEC Nova Era</h4>
                        <p>Início das atividades com 3 cursos técnicos e 120 alunos.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <span class="timeline-year">2005</span>
                        <h4>Expansão do Campus</h4>
                        <p>Nova ala com laboratórios de informática e ciências.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <span class="timeline-year">2012</span>
                        <h4>Premio de Excelência</h4>
                        <p>Reconhecida como melhor ETEC do estado por 3 anos consecutivos.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <span class="timeline-year">2018</span>
                        <h4>Ensino Híbrido</h4>
                        <p>Adoção de plataformas digitais e metodologias ativas.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <span class="timeline-year">2024</span>
                        <h4>Hub de Inovação</h4>
                        <p>Inauguração do laboratório de IA e tecnologias emergentes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- EQUIPE --}}
<section class="section-equipe">
    <div class="section-container">
        <div class="section-header">
            <div class="section-tag">Quem faz acontecer</div>
            <h2 class="section-title">Nossa <span>Equipe</span></h2>
            <p class="section-subtitle">Profissionais dedicados ao seu crescimento.</p>
        </div>
        <div class="equipe-grid">
            @foreach($equipe as $membro)
            <div class="equipe-card">
                <div class="equipe-avatar" style="background: {{ $membro['cor'] }}">
                    {{ $membro['iniciais'] }}
                </div>
                <h4>{{ $membro['nome'] }}</h4>
                <span class="equipe-cargo">{{ $membro['cargo'] }}</span>
                <p>{{ $membro['descricao'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- INFRAESTRUTURA --}}
<section class="section-infra">
    <div class="section-container">
        <div class="section-header">
            <div class="section-tag">Estrutura</div>
            <h2 class="section-title">Nossa <span>Infraestrutura</span></h2>
        </div>
        <div class="infra-grid">
            <div class="infra-item">
                <i class="bi bi-pc-display-horizontal"></i>
                <h4>8 Laboratórios</h4>
                <p>Informática com equipamentos modernos e internet de alta velocidade.</p>
            </div>
            <div class="infra-item">
                <i class="bi bi-journals"></i>
                <h4>Biblioteca Digital</h4>
                <p>Acervo com mais de 10.000 títulos físicos e digitais.</p>
            </div>
            <div class="infra-item">
                <i class="bi bi-hospital"></i>
                <h4>Lab. de Saúde</h4>
                <p>Laboratório equipado para práticas de enfermagem e farmácia.</p>
            </div>
            <div class="infra-item">
                <i class="bi bi-cup-hot-fill"></i>
                <h4>Cantina</h4>
                <p>Alimentação saudável e acessível para alunos e professores.</p>
            </div>
            <div class="infra-item">
                <i class="bi bi-wifi"></i>
                <h4>Wi-Fi no Campus</h4>
                <p>Cobertura total com internet de 1 Gbps em todos os ambientes.</p>
            </div>
            <div class="infra-item">
                <i class="bi bi-camera-video-fill"></i>
                <h4>Auditório</h4>
                <p>Espaço para eventos, palestras e apresentações com 300 lugares.</p>
            </div>
        </div>
    </div>
</section>

@endsection