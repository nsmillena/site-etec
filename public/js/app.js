/**
 * ETEC Nova Era — app.js
 * JavaScript principal do site
 */

document.addEventListener('DOMContentLoaded', () => {

    // ── NAVBAR: scroll effect ──────────────────────────────
    const navbar = document.getElementById('navbar');
    if (navbar) {
        window.addEventListener('scroll', () => {
            navbar.classList.toggle('scrolled', window.scrollY > 20);
        }, { passive: true });
    }

    // ── NAVBAR: hamburger mobile ───────────────────────────
    const hamburger = document.getElementById('hamburger');
    const navLinks  = document.getElementById('nav-links');

    if (hamburger && navLinks) {
        hamburger.addEventListener('click', () => {
            const isOpen = navLinks.classList.toggle('open');
            hamburger.classList.toggle('active', isOpen);
            hamburger.setAttribute('aria-expanded', String(isOpen));
            document.body.style.overflow = isOpen ? 'hidden' : '';
        });

        // Fecha ao clicar em link
        navLinks.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('open');
                hamburger.classList.remove('active');
                hamburger.setAttribute('aria-expanded', 'false');
                document.body.style.overflow = '';
            });
        });

        // Fecha ao clicar fora
        document.addEventListener('click', (e) => {
            if (!navbar.contains(e.target)) {
                navLinks.classList.remove('open');
                hamburger.classList.remove('active');
                hamburger.setAttribute('aria-expanded', 'false');
                document.body.style.overflow = '';
            }
        });
    }

    // ── SCROLL REVEAL ─────────────────────────────────────
    const revealElements = document.querySelectorAll(
        '.diferencial-item, .curso-card, .curso-card-full, .noticia-home-card, ' +
        '.depoimento-card, .mvv-card, .equipe-card, .infra-item, ' +
        '.noticia-lista-card, .timeline-item, .info-card'
    );

    if ('IntersectionObserver' in window && revealElements.length) {
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry, i) => {
                if (entry.isIntersecting) {
                    // Staggered delay based on position
                    const delay = (entry.target.dataset.delay || 0) * 80;
                    entry.target.style.transitionDelay = `${delay}ms`;
                    entry.target.classList.add('revealed');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });

        revealElements.forEach((el, i) => {
            el.dataset.delay = i % 4; // groups of 4 for stagger
            el.classList.add('reveal-pending');
            revealObserver.observe(el);
        });
    }

    // ── SMOOTH SCROLL para âncoras ─────────────────────────
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    // ── FORMULÁRIO DE CONTATO: máscara telefone ────────────
    const telefoneInput = document.getElementById('telefone');
    if (telefoneInput) {
        telefoneInput.addEventListener('input', (e) => {
            let val = e.target.value.replace(/\D/g, '');
            if (val.length > 11) val = val.slice(0, 11);
            if (val.length > 6) {
                val = `(${val.slice(0,2)}) ${val.slice(2,7)}-${val.slice(7)}`;
            } else if (val.length > 2) {
                val = `(${val.slice(0,2)}) ${val.slice(2)}`;
            }
            e.target.value = val;
        });
    }

    // ── ACTIVE NAV ITEM: scroll spy (página única, opcional) ─
    const currentPath = window.location.pathname;
    document.querySelectorAll('.nav-links a').forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active');
        }
    });

});

// ── CSS para reveal animation ──────────────────────────────
const style = document.createElement('style');
style.textContent = `
  .reveal-pending {
    opacity: 0;
    transform: translateY(24px);
    transition: opacity 0.55s ease, transform 0.55s ease;
  }
  .revealed {
    opacity: 1;
    transform: translateY(0);
  }
`;
document.head.appendChild(style);