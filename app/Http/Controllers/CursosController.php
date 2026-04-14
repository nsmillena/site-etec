<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    /**
     * Retorna todos os cursos mockados.
     */
    public static function getAllCursos(): array
    {
        return [
            // TECNOLOGIA
            [
                'nome'        => 'Desenvolvimento de Sistemas',
                'area'        => 'Tecnologia',
                'icone'       => 'bi-code-slash',
                'cor'         => '#3b5bdb',
                'descricao'   => 'Aprenda a criar sistemas web e mobile com as tecnologias mais demandadas pelo mercado. HTML, CSS, JavaScript, PHP, banco de dados e metodologias ágeis.',
                'duracao'     => '2 anos',
                'turno'       => 'Manhã / Noite',
                'vagas'       => 40,
                'habilidades' => ['HTML/CSS', 'JavaScript', 'PHP/Laravel', 'MySQL', 'Git'],
            ],
            [
                'nome'        => 'Redes de Computadores',
                'area'        => 'Tecnologia',
                'icone'       => 'bi-router-fill',
                'cor'         => '#0ca678',
                'descricao'   => 'Infraestrutura, segurança e configuração de redes corporativas, data centers e ambientes em nuvem.',
                'duracao'     => '1,5 anos',
                'turno'       => 'Tarde / Noite',
                'vagas'       => 35,
                'habilidades' => ['TCP/IP', 'Cisco', 'Linux', 'Segurança', 'Cloud'],
            ],
            [
                'nome'        => 'Análise e Desenvolvimento de Sistemas',
                'area'        => 'Tecnologia',
                'icone'       => 'bi-diagram-3-fill',
                'cor'         => '#1971c2',
                'descricao'   => 'Análise de requisitos, modelagem de sistemas, UML, programação orientada a objetos e engenharia de software.',
                'duracao'     => '2 anos',
                'turno'       => 'Noite',
                'vagas'       => 40,
                'habilidades' => ['UML', 'Java', 'Python', 'Banco de Dados', 'Scrum'],
            ],
            [
                'nome'        => 'Inteligência Artificial',
                'area'        => 'Tecnologia',
                'icone'       => 'bi-cpu-fill',
                'cor'         => '#7048e8',
                'descricao'   => 'Machine learning, processamento de dados, Python, TensorFlow e aplicações práticas de IA no mercado.',
                'duracao'     => '2 anos',
                'turno'       => 'Noite',
                'vagas'       => 30,
                'habilidades' => ['Python', 'Machine Learning', 'Data Science', 'TensorFlow', 'SQL'],
            ],

            // SAÚDE
            [
                'nome'        => 'Enfermagem',
                'area'        => 'Saúde',
                'icone'       => 'bi-heart-pulse-fill',
                'cor'         => '#e03131',
                'descricao'   => 'Formação completa para atuação em hospitais, clínicas, UBSs e unidades de saúde pública e privada.',
                'duracao'     => '2 anos',
                'turno'       => 'Manhã',
                'vagas'       => 45,
                'habilidades' => ['Anatomia', 'Farmacologia', 'Primeiros Socorros', 'UTI', 'Ética'],
            ],
            [
                'nome'        => 'Farmácia',
                'area'        => 'Saúde',
                'icone'       => 'bi-capsule-pill',
                'cor'         => '#2f9e44',
                'descricao'   => 'Manipulação, dispensação e gestão de medicamentos em farmácias, drogarias e indústria farmacêutica.',
                'duracao'     => '2 anos',
                'turno'       => 'Manhã / Tarde',
                'vagas'       => 35,
                'habilidades' => ['Farmacologia', 'Química', 'Legislação', 'Atendimento', 'Manipulação'],
            ],
            [
                'nome'        => 'Nutrição e Dietética',
                'area'        => 'Saúde',
                'icone'       => 'bi-apple',
                'cor'         => '#f76707',
                'descricao'   => 'Planejamento nutricional, dietoterapia, nutrição esportiva e gestão de unidades de alimentação.',
                'duracao'     => '1,5 anos',
                'turno'       => 'Tarde',
                'vagas'       => 35,
                'habilidades' => ['Dietética', 'Bioquímica', 'Gastronomia', 'Nutrição Clínica', 'Higiene'],
            ],

            // NEGÓCIOS
            [
                'nome'        => 'Administração',
                'area'        => 'Negócios',
                'icone'       => 'bi-bar-chart-line-fill',
                'cor'         => '#f59f00',
                'descricao'   => 'Gestão empresarial, finanças, RH, marketing e empreendedorismo para o mercado competitivo.',
                'duracao'     => '2 anos',
                'turno'       => 'Manhã / Noite',
                'vagas'       => 40,
                'habilidades' => ['Gestão', 'Finanças', 'Marketing', 'Excel', 'Liderança'],
            ],
            [
                'nome'        => 'Logística',
                'area'        => 'Negócios',
                'icone'       => 'bi-truck-front-fill',
                'cor'         => '#1864ab',
                'descricao'   => 'Supply chain, gestão de estoques, transporte, armazenagem e tecnologia aplicada à logística.',
                'duracao'     => '1,5 anos',
                'turno'       => 'Noite',
                'vagas'       => 35,
                'habilidades' => ['Supply Chain', 'ERP', 'Estoques', 'Transporte', 'Importação'],
            ],
            [
                'nome'        => 'Contabilidade',
                'area'        => 'Negócios',
                'icone'       => 'bi-calculator-fill',
                'cor'         => '#5c7cfa',
                'descricao'   => 'Escrituração contábil, legislação fiscal, tributos e uso de softwares de gestão financeira.',
                'duracao'     => '2 anos',
                'turno'       => 'Noite',
                'vagas'       => 40,
                'habilidades' => ['Contabilidade', 'Fiscal', 'Excel', 'Impostos', 'Auditoria'],
            ],

            // DESIGN E COMUNICAÇÃO
            [
                'nome'        => 'Design Gráfico',
                'area'        => 'Design',
                'icone'       => 'bi-palette-fill',
                'cor'         => '#ae3ec9',
                'descricao'   => 'Criação visual, branding, diagramação, ilustração e design digital para mídias impressas e online.',
                'duracao'     => '2 anos',
                'turno'       => 'Tarde',
                'vagas'       => 30,
                'habilidades' => ['Photoshop', 'Illustrator', 'InDesign', 'UX/UI', 'Branding'],
            ],
            [
                'nome'        => 'Produção Audiovisual',
                'area'        => 'Design',
                'icone'       => 'bi-camera-video-fill',
                'cor'         => '#e64980',
                'descricao'   => 'Captação, edição e produção de vídeos, podcasts e conteúdo para plataformas digitais.',
                'duracao'     => '2 anos',
                'turno'       => 'Tarde',
                'vagas'       => 30,
                'habilidades' => ['Premiere', 'After Effects', 'Fotografia', 'Roteiro', 'DaVinci'],
            ],
        ];
    }

    /**
     * Lista todos os cursos.
     */
    public function index(): \Illuminate\View\View
    {
        $cursos = self::getAllCursos();
        $areas  = array_unique(array_column($cursos, 'area'));

        return view('pages.cursos', compact('cursos', 'areas'));
    }
}