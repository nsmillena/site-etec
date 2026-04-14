<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    /**
     * Retorna todas as notícias mockadas.
     */
    public static function getAllNoticias(): array
    {
        return [
            [
                'titulo'    => 'ETEC Nova Era abre inscrições para o 1º semestre de 2025',
                'resumo'    => 'As inscrições para os cursos técnicos do primeiro semestre de 2025 já estão abertas. São 18 cursos com mais de 500 vagas disponíveis. Processo seletivo ocorrerá em fevereiro.',
                'categoria' => 'Inscrições',
                'data'      => '15 Jan 2025',
                'autor'     => 'Redação ETEC',
                'leitura'   => '3 min',
                'slug'      => 'inscricoes-abertas-2025',
                'icone'     => 'bi-mortarboard-fill',
                'cor'       => 'linear-gradient(135deg, #3b5bdb, #1971c2)',
                'conteudo'  => '<p>A ETEC Nova Era anuncia a abertura das inscrições para os cursos técnicos do primeiro semestre de 2025. São mais de 500 vagas distribuídas em 18 cursos técnicos nas áreas de Tecnologia, Saúde, Negócios e Design.</p>
                <h3>Como se inscrever</h3>
                <p>As inscrições devem ser realizadas pelo portal online ou presencialmente na secretaria da escola. O candidato deve apresentar RG, CPF, histórico escolar e comprovante de residência.</p>
                <h3>Processo Seletivo</h3>
                <p>O processo seletivo consiste em análise de histórico escolar. Candidatos com renda familiar de até 3 salários mínimos têm prioridade no processo de seleção.</p>
                <h3>Calendário</h3>
                <ul>
                    <li><strong>Inscrições:</strong> 15 de janeiro a 15 de fevereiro de 2025</li>
                    <li><strong>Divulgação dos aprovados:</strong> 25 de fevereiro de 2025</li>
                    <li><strong>Matrícula:</strong> 3 a 7 de março de 2025</li>
                    <li><strong>Início das aulas:</strong> 17 de março de 2025</li>
                </ul>
                <p>Para mais informações, acesse nossa página de cursos ou entre em contato pela secretaria.</p>',
            ],
            [
                'titulo'    => 'Alunos de TI vencem hackathon estadual com projeto de IA',
                'resumo'    => 'Equipe de alunos do curso de Desenvolvimento de Sistemas conquistou o 1º lugar no Hackathon Tech SP 2024, com um projeto de IA para diagnóstico precoce de doenças.',
                'categoria' => 'Conquistas',
                'data'      => '10 Jan 2025',
                'autor'     => 'Prof. Carlos Neto',
                'leitura'   => '4 min',
                'slug'      => 'alunos-vencem-hackathon',
                'icone'     => 'bi-trophy-fill',
                'cor'       => 'linear-gradient(135deg, #f59f00, #e67700)',
                'conteudo'  => '<p>Uma equipe de cinco alunos do curso de Desenvolvimento de Sistemas da ETEC Nova Era conquistou o primeiro lugar no Hackathon Tech SP 2024, um dos maiores eventos de inovação tecnológica do estado.</p>
                <h3>O Projeto</h3>
                <p>O projeto, batizado de "MediScan AI", utiliza inteligência artificial e visão computacional para auxiliar médicos no diagnóstico precoce de doenças a partir de exames de imagem. A solução demonstrou 94% de precisão nos testes realizados.</p>
                <h3>A Equipe</h3>
                <p>A equipe foi composta por alunos do 3º e 4º semestres: Lucas Andrade (líder técnico), Maria Fernanda Silva (IA/ML), Pedro Oliveira (backend), Juliana Santos (frontend) e Rafael Lima (UX/UI).</p>
                <h3>Próximos Passos</h3>
                <p>O projeto foi selecionado para apresentação no Demo Day nacional em março, e a equipe já recebeu propostas de incubação de duas startups do setor de healthtech.</p>',
            ],
            [
                'titulo'    => 'Novo laboratório de inteligência artificial é inaugurado',
                'resumo'    => 'O Hub de Inovação da ETEC Nova Era ganhou um laboratório dedicado à IA, com hardware de última geração, incluindo GPUs para treinamento de modelos de machine learning.',
                'categoria' => 'Infraestrutura',
                'data'      => '05 Jan 2025',
                'autor'     => 'Profa. Ana Lima',
                'leitura'   => '3 min',
                'slug'      => 'laboratorio-ia-inaugurado',
                'icone'     => 'bi-cpu-fill',
                'cor'       => 'linear-gradient(135deg, #0ca678, #099268)',
                'conteudo'  => '<p>A ETEC Nova Era inaugurou seu mais novo espaço: o Laboratório de Inteligência Artificial, parte do Hub de Inovação que está transformando a escola em um centro de excelência tecnológica.</p>
                <h3>Equipamentos</h3>
                <p>O laboratório conta com 20 estações de trabalho equipadas com GPUs NVIDIA RTX 4080, processadores de última geração e 64GB de RAM cada. Há também um servidor dedicado para projetos de deep learning com cluster de GPUs.</p>
                <h3>O que será ensinado</h3>
                <p>O espaço será utilizado pelos alunos dos cursos de Desenvolvimento de Sistemas, Análise de Dados e pelo novo curso de Inteligência Artificial, que inicia no primeiro semestre de 2025.</p>
                <h3>Parceria com a Indústria</h3>
                <p>O laboratório foi possível graças à parceria com empresas do setor tecnológico que doaram equipamentos e oferecerão mentorias aos alunos.</p>',
            ],
            [
                'titulo'    => 'Semana de Tecnologia reúne mais de 800 estudantes',
                'resumo'    => 'A 12ª edição da Semana de Tecnologia da ETEC Nova Era foi um sucesso, com palestras de profissionais renomados, workshops hands-on e feira de projetos dos alunos.',
                'categoria' => 'Eventos',
                'data'      => '20 Dez 2024',
                'autor'     => 'Coord. de Eventos',
                'leitura'   => '5 min',
                'slug'      => 'semana-tecnologia-2024',
                'icone'     => 'bi-calendar-event-fill',
                'cor'       => 'linear-gradient(135deg, #7048e8, #5f3dc4)',
                'conteudo'  => '<p>A 12ª Semana de Tecnologia da ETEC Nova Era superou todas as expectativas. Durante cinco dias, mais de 800 estudantes, professores e profissionais do mercado se reuniram para celebrar e discutir o futuro da tecnologia.</p>
                <h3>Palestras e Workshops</h3>
                <p>O evento contou com 15 palestras e 20 workshops ministrados por profissionais de empresas como Google, Microsoft, iFood, Nubank e diversas startups. Os temas abrangeram desde desenvolvimento web até computação quântica.</p>
                <h3>Feira de Projetos</h3>
                <p>A feira de projetos exibiu 45 trabalhos desenvolvidos pelos alunos ao longo do semestre. Três projetos foram premiados e receberão suporte para desenvolvimento como produtos reais.</p>',
            ],
            [
                'titulo'    => 'ETEC firma parceria com 12 empresas para estágios remunerados',
                'resumo'    => 'Novo programa de estágio garante vagas remuneradas para alunos do último semestre em empresas de tecnologia, saúde e administração de São Paulo.',
                'categoria' => 'Parceiros',
                'data'      => '15 Dez 2024',
                'autor'     => 'Coord. de Estágios',
                'leitura'   => '4 min',
                'slug'      => 'parceria-estagios-2025',
                'icone'     => 'bi-briefcase-fill',
                'cor'       => 'linear-gradient(135deg, #1864ab, #1971c2)',
                'conteudo'  => '<p>A ETEC Nova Era firmou novas parcerias com 12 empresas para oferecer vagas de estágio remunerado aos alunos formandos. O programa contempla alunos do último semestre de todos os cursos.</p>
                <h3>Empresas Parceiras</h3>
                <p>As empresas parceiras atuam nos setores de tecnologia, saúde, varejo e serviços financeiros. Todas as vagas oferecem bolsa mensal, vale-transporte e possibilidade de efetivação ao término do estágio.</p>
                <h3>Como Participar</h3>
                <p>Os alunos interessados devem se cadastrar no portal de estágios da escola e aguardar o contato do setor responsável. As seleções começam em fevereiro de 2025.</p>',
            ],
            [
                'titulo'    => 'Formatura 2024: 320 novos profissionais técnicos no mercado',
                'resumo'    => 'A cerimônia de formatura 2024 celebrou mais uma turma de profissionais preparados pela ETEC Nova Era para enfrentar os desafios do mercado de trabalho.',
                'categoria' => 'Eventos',
                'data'      => '05 Dez 2024',
                'autor'     => 'Profa. Ana Lima',
                'leitura'   => '3 min',
                'slug'      => 'formatura-2024',
                'icone'     => 'bi-award-fill',
                'cor'       => 'linear-gradient(135deg, #e03131, #c92a2a)',
                'conteudo'  => '<p>A ETEC Nova Era realizou sua cerimônia de formatura 2024 com a presença de 320 formandos, familiares, professores e autoridades da educação. A festa celebrou não apenas diplomas, mas histórias de superação e dedicação.</p>
                <h3>Turmas Formadas</h3>
                <p>Formaram-se alunos dos cursos de Desenvolvimento de Sistemas, Redes, Administração, Enfermagem, Farmácia, Contabilidade, Design Gráfico e Logística.</p>
                <h3>Orador da Turma</h3>
                <p>O discurso da turma foi proferido por Marcos Alves, formando de Desenvolvimento de Sistemas, que emocionou a plateia ao falar sobre a importância da educação pública de qualidade em sua trajetória.</p>',
            ],
        ];
    }

    /**
     * Lista todas as notícias.
     */
    public function index(): \Illuminate\View\View
    {
        $todasNoticias  = self::getAllNoticias();
        $noticiaDestaque = $todasNoticias[0];
        $noticias        = array_slice($todasNoticias, 1);

        return view('pages.noticias', compact('noticias', 'noticiaDestaque'));
    }

    /**
     * Exibe uma notícia específica pelo slug.
     */
    public function show(string $slug): \Illuminate\View\View|\Illuminate\Http\RedirectResponse
    {
        $todasNoticias = self::getAllNoticias();

        $noticia = collect($todasNoticias)->firstWhere('slug', $slug);

        if (! $noticia) {
            return redirect()->route('noticias');
        }

        $outrasNoticias = collect($todasNoticias)
            ->where('slug', '!=', $slug)
            ->take(3)
            ->values()
            ->toArray();

        return view('pages.noticia-single', compact('noticia', 'outrasNoticias'));
    }
}