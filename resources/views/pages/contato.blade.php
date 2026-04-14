@extends('layouts.app')

@section('title', 'Contato')

@section('content')

<section class="page-hero">
    <div class="page-hero-bg"></div>
    <div class="section-container">
        <div class="breadcrumb">
            <a href="{{ route('home') }}">Início</a>
            <i class="bi bi-chevron-right"></i>
            <span>Contato</span>
        </div>
        <h1 class="page-hero-title">Entre em <span>Contato</span></h1>
        <p class="page-hero-desc">Tire suas dúvidas, envie sugestões ou solicite informações sobre nossos cursos.</p>
    </div>
</section>

<section class="section-contato">
    <div class="section-container">
        <div class="contato-layout">

            {{-- FORMULÁRIO --}}
            <div class="contato-form-wrapper">
                <h2>Envie sua <span>mensagem</span></h2>
                <p>Responderemos em até 2 dias úteis.</p>

                @if(session('success'))
                    <div class="alert-success">
                        <i class="bi bi-check-circle-fill"></i>
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contato.enviar') }}" method="POST" class="contato-form" id="contato-form">
                    @csrf

                    <div class="form-row">
                        <div class="form-group {{ $errors->has('nome') ? 'has-error' : '' }}">
                            <label for="nome">
                                <i class="bi bi-person"></i> Nome completo *
                            </label>
                            <input
                                type="text"
                                id="nome"
                                name="nome"
                                value="{{ old('nome') }}"
                                placeholder="Seu nome completo"
                                required
                            >
                            @error('nome')
                                <span class="field-error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label for="email">
                                <i class="bi bi-envelope"></i> E-mail *
                            </label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="seu@email.com"
                                required
                            >
                            @error('email')
                                <span class="field-error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group {{ $errors->has('telefone') ? 'has-error' : '' }}">
                            <label for="telefone">
                                <i class="bi bi-telephone"></i> Telefone
                            </label>
                            <input
                                type="tel"
                                id="telefone"
                                name="telefone"
                                value="{{ old('telefone') }}"
                                placeholder="(11) 99999-9999"
                            >
                        </div>

                        <div class="form-group {{ $errors->has('assunto') ? 'has-error' : '' }}">
                            <label for="assunto">
                                <i class="bi bi-tag"></i> Assunto *
                            </label>
                            <select id="assunto" name="assunto" required>
                                <option value="">Selecione...</option>
                                <option value="informacoes" {{ old('assunto') == 'informacoes' ? 'selected' : '' }}>Informações sobre cursos</option>
                                <option value="inscricao" {{ old('assunto') == 'inscricao' ? 'selected' : '' }}>Inscrições</option>
                                <option value="secretaria" {{ old('assunto') == 'secretaria' ? 'selected' : '' }}>Secretaria</option>
                                <option value="estagio" {{ old('assunto') == 'estagio' ? 'selected' : '' }}>Estágio e parcerias</option>
                                <option value="outros" {{ old('assunto') == 'outros' ? 'selected' : '' }}>Outros</option>
                            </select>
                            @error('assunto')
                                <span class="field-error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('mensagem') ? 'has-error' : '' }}">
                        <label for="mensagem">
                            <i class="bi bi-chat-text"></i> Mensagem *
                        </label>
                        <textarea
                            id="mensagem"
                            name="mensagem"
                            rows="6"
                            placeholder="Escreva sua mensagem aqui..."
                            required
                        >{{ old('mensagem') }}</textarea>
                        @error('mensagem')
                            <span class="field-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn-submit" id="btn-submit">
                        <span class="btn-text">
                            <i class="bi bi-send-fill"></i>
                            Enviar mensagem
                        </span>
                        <span class="btn-loading" style="display:none">
                            <i class="bi bi-arrow-clockwise spin"></i>
                            Enviando...
                        </span>
                    </button>
                </form>
            </div>

            {{-- INFO LATERAL --}}
            <div class="contato-info">
                <div class="info-card">
                    <div class="info-icon"><i class="bi bi-geo-alt-fill"></i></div>
                    <h4>Endereço</h4>
                    <p>Av. Tecnológica, 1500 – Centro<br>São Paulo – SP, CEP 01310-100</p>
                </div>
                <div class="info-card">
                    <div class="info-icon"><i class="bi bi-telephone-fill"></i></div>
                    <h4>Telefone</h4>
                    <p>(11) 3000-4000<br>(11) 3000-4001 — Secretaria</p>
                </div>
                <div class="info-card">
                    <div class="info-icon"><i class="bi bi-envelope-fill"></i></div>
                    <h4>E-mail</h4>
                    <p>contato@etecnovaera.edu.br<br>secretaria@etecnovaera.edu.br</p>
                </div>
                <div class="info-card">
                    <div class="info-icon"><i class="bi bi-clock-fill"></i></div>
                    <h4>Horário de Atendimento</h4>
                    <p>Segunda a Sexta: 7h às 22h<br>Sábado: 8h às 12h</p>
                </div>
                <div class="info-card mapa-placeholder">
                    <div class="mapa-mock">
                        <i class="bi bi-map-fill"></i>
                        <span>Av. Tecnológica, 1500</span>
                        <span>São Paulo – SP</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
    document.getElementById('contato-form').addEventListener('submit', function() {
        const btnText = document.querySelector('.btn-text');
        const btnLoading = document.querySelector('.btn-loading');
        const btnSubmit = document.getElementById('btn-submit');
        btnText.style.display = 'none';
        btnLoading.style.display = 'inline-flex';
        btnSubmit.disabled = true;
    });
</script>
@endsection