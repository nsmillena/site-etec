<footer class="footer">
    <div class="footer-top">
        <div class="footer-container">

            <div class="footer-brand">
                <div class="footer-logo">
                    <div class="logo-icon">
                        <span>E</span>
                    </div>
                    <div class="logo-text">
                        <span class="logo-main">ETEC</span>
                        <span class="logo-sub">Nova Era</span>
                    </div>
                </div>
                <p>Formando os profissionais e líderes que vão transformar o Brasil de amanhã.</p>
                <div class="footer-social">
                    <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="footer-links">
                <h4>Navegação</h4>
                <ul>
                    <li><a href="{{ route('home') }}">Início</a></li>
                    <li><a href="{{ route('sobre') }}">Sobre a ETEC</a></li>
                    <li><a href="{{ route('cursos') }}">Cursos</a></li>
                    <li><a href="{{ route('noticias') }}">Notícias</a></li>
                    <li><a href="{{ route('contato') }}">Contato</a></li>
                </ul>
            </div>

            <div class="footer-links">
                <h4>Cursos em Destaque</h4>
                <ul>
                    <li><a href="{{ route('cursos') }}">Desenvolvimento de Sistemas</a></li>
                    <li><a href="{{ route('cursos') }}">Redes de Computadores</a></li>
                    <li><a href="{{ route('cursos') }}">Administração</a></li>
                    <li><a href="{{ route('cursos') }}">Enfermagem</a></li>
                    <li><a href="{{ route('cursos') }}">Design Gráfico</a></li>
                </ul>
            </div>

            <div class="footer-contact">
                <h4>Contato</h4>
                <ul>
                    <li>
                        <i class="bi bi-geo-alt-fill"></i>
                        <span>Av. Tecnológica, 1500 – Centro<br>São Paulo – SP</span>
                    </li>
                    <li>
                        <i class="bi bi-telephone-fill"></i>
                        <span>(11) 3000-4000</span>
                    </li>
                    <li>
                        <i class="bi bi-envelope-fill"></i>
                        <span>contato@etecnovaera.edu.br</span>
                    </li>
                    <li>
                        <i class="bi bi-clock-fill"></i>
                        <span>Seg–Sex: 7h às 22h</span>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <div class="footer-bottom">
        <div class="footer-container">
            <p>&copy; {{ date('Y') }} ETEC Nova Era — Escola Técnica Estadual Fictícia. Projeto educacional.</p>
            <p>Desenvolvido com <i class="bi bi-heart-fill"></i> usando Laravel &amp; PHP</p>
        </div>
    </div>
</footer>