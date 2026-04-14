<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Retorna dados mockados de cursos em destaque.
     */
    private function getCursosDestaque(): array
    {
        return [
            [
                'nome'      => 'Desenvolvimento de Sistemas',
                'area'      => 'Tecnologia',
                'icone'     => 'bi-code-slash',
                'cor'       => '#3b5bdb',
                'descricao' => 'Aprenda a criar sistemas web e mobile com as tecnologias mais demandadas pelo mercado.',
                'duracao'   => '2 anos',
                'turno'     => 'Manhã / Noite',
            ],
            [
                'nome'      => 'Redes de Computadores',
                'area'      => 'Tecnologia',
                'icone'     => 'bi-router-fill',
                'cor'       => '#0ca678',
                'descricao' => 'Infraestrutura, segurança e configuração de redes corporativas e data centers.',
                'duracao'   => '1,5 anos',
                'turno'     => 'Tarde / Noite',
            ],
            [
                'nome'      => 'Enfermagem',
                'area'      => 'Saúde',
                'icone'     => 'bi-heart-pulse-fill',
                'cor'       => '#e03131',
                'descricao' => 'Formação completa para atuação em hospitais, clínicas e unidades de saúde.',
                'duracao'   => '2 anos',
                'turno'     => 'Manhã',
            ],
        ];
    }

    /**
     * Retorna notícias recentes mockadas.
     */
    private function getNoticiasRecentes(): array
    {
        return [
            [
                'titulo'    => 'ETEC Nova Era abre inscrições para o 1º semestre de 2025',
                'resumo'    => 'As inscrições para os cursos técnicos do primeiro semestre de 2025 já estão abertas. Confira os cursos disponíveis e garanta sua vaga!',
                'categoria' => 'Inscrições',
                'data'      => '15 Jan 2025',
                'slug'      => 'inscricoes-abertas-2025',
                'icone'     => 'bi-mortarboard-fill',
                'cor'       => 'linear-gradient(135deg, #3b5bdb, #1971c2)',
            ],
            [
                'titulo'    => 'Alunos de TI vencem hackathon estadual com projeto de IA',
                'resumo'    => 'Equipe de alunos do curso de Desenvolvimento de Sistemas conquistou o 1º lugar no Hackathon Tech SP 2024.',
                'categoria' => 'Conquistas',
                'data'      => '10 Jan 2025',
                'slug'      => 'alunos-vencem-hackathon',
                'icone'     => 'bi-trophy-fill',
                'cor'       => 'linear-gradient(135deg, #f59f00, #e67700)',
            ],
            [
                'titulo'    => 'Novo laboratório de inteligência artificial é inaugurado',
                'resumo'    => 'O Hub de Inovação da ETEC Nova Era ganhou um laboratório dedicado à IA, com hardware de última geração.',
                'categoria' => 'Infraestrutura',
                'data'      => '05 Jan 2025',
                'slug'      => 'laboratorio-ia-inaugurado',
                'icone'     => 'bi-cpu-fill',
                'cor'       => 'linear-gradient(135deg, #0ca678, #099268)',
            ],
        ];
    }

    /**
     * Página inicial.
     */
    public function index(): \Illuminate\View\View
    {
        return view('pages.home', [
            'cursosDestaque'   => $this->getCursosDestaque(),
            'noticiasRecentes' => $this->getNoticiasRecentes(),
        ]);
    }
}