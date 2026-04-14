<nav class="navbar" id="navbar">
    <div class="nav-container">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="nav-logo">
            <div class="logo-icon">
                <span>E</span>
            </div>
            <div class="logo-text">
                <span class="logo-main">ETEC</span>
                <span class="logo-sub">Nova Era</span>
            </div>
        </a>

        {{-- Desktop Menu --}}
        <ul class="nav-links" id="nav-links">
            <li>
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                    Início
                </a>
            </li>
            <li>
                <a href="{{ route('sobre') }}" class="{{ request()->routeIs('sobre') ? 'active' : '' }}">
                    Sobre
                </a>
            </li>
            <li>
                <a href="{{ route('cursos') }}" class="{{ request()->routeIs('cursos') ? 'active' : '' }}">
                    Cursos
                </a>
            </li>
            <li>
                <a href="{{ route('noticias') }}" class="{{ request()->routeIs('noticias*') ? 'active' : '' }}">
                    Notícias
                </a>
            </li>
            <li>
                <a href="{{ route('contato') }}" class="{{ request()->routeIs('contato') ? 'active' : '' }}">
                    Contato
                </a>
            </li>
        </ul>

        {{-- CTA Button --}}
        <a href="{{ route('cursos') }}" class="nav-cta">
            <i class="bi bi-mortarboard-fill"></i>
            Inscreva-se
        </a>

        {{-- Hamburger --}}
        <button class="hamburger" id="hamburger" aria-label="Menu" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>

    </div>
</nav>