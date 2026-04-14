<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreController extends Controller
{
    public function index(): \Illuminate\View\View
    {
        $equipe = [
            [
                'nome'      => 'Profa. Ana Lima',
                'cargo'     => 'Diretora Geral',
                'iniciais'  => 'AL',
                'cor'       => '#3b5bdb',
                'descricao' => 'Doutora em Educação pela USP, com 20 anos de experiência em gestão escolar.',
            ],
            [
                'nome'      => 'Prof. Carlos Neto',
                'cargo'     => 'Coord. de Tecnologia',
                'iniciais'  => 'CN',
                'cor'       => '#0ca678',
                'descricao' => 'Mestre em Ciência da Computação, ex-desenvolvedor sênior em multinacional.',
            ],
            [
                'nome'      => 'Profa. Beatriz Ramos',
                'cargo'     => 'Coord. de Saúde',
                'iniciais'  => 'BR',
                'cor'       => '#e03131',
                'descricao' => 'Enfermeira especialista, com experiência em UTI e ensino técnico há 15 anos.',
            ],
            [
                'nome'      => 'Prof. Diego Souza',
                'cargo'     => 'Coord. de Negócios',
                'iniciais'  => 'DS',
                'cor'       => '#f59f00',
                'descricao' => 'MBA em Gestão Empresarial, com vasta experiência no setor financeiro.',
            ],
            [
                'nome'      => 'Profa. Fernanda Cruz',
                'cargo'     => 'Coord. Pedagógica',
                'iniciais'  => 'FC',
                'cor'       => '#ae3ec9',
                'descricao' => 'Especialista em metodologias ativas e inovação pedagógica.',
            ],
            [
                'nome'      => 'Prof. Gustavo Alves',
                'cargo'     => 'Coord. de Design',
                'iniciais'  => 'GA',
                'cor'       => '#f76707',
                'descricao' => 'Designer com 12 anos de mercado, especializado em UX/UI e branding.',
            ],
        ];

        return view('pages.sobre', compact('equipe'));
    }
}