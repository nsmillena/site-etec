<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ContatoController extends Controller
{
    /**
     * Exibe o formulário de contato.
     */
    public function index(): \Illuminate\View\View
    {
        return view('pages.contato');
    }

    /**
     * Processa o envio do formulário de contato.
     */
    public function enviar(Request $request): RedirectResponse
    {
        // Validação dos campos
        $request->validate([
            'nome'     => 'required|min:3|max:100',
            'email'    => 'required|email|max:150',
            'telefone' => 'nullable|max:20',
            'assunto'  => 'required',
            'mensagem' => 'required|min:10|max:2000',
        ], [
            'nome.required'     => 'O nome é obrigatório.',
            'nome.min'          => 'O nome deve ter pelo menos 3 caracteres.',
            'email.required'    => 'O e-mail é obrigatório.',
            'email.email'       => 'Informe um e-mail válido.',
            'assunto.required'  => 'Selecione um assunto.',
            'mensagem.required' => 'A mensagem é obrigatória.',
            'mensagem.min'      => 'A mensagem deve ter pelo menos 10 caracteres.',
        ]);

        // Em produção, aqui enviaria o e-mail:
        // Mail::to('contato@etecnovaera.edu.br')->send(new ContatoMail($request->all()));

        // Log para demonstração (opcional)
        \Illuminate\Support\Facades\Log::info('Contato recebido', [
            'nome'    => $request->nome,
            'email'   => $request->email,
            'assunto' => $request->assunto,
        ]);

        return redirect()
            ->route('contato')
            ->with('success', 'Mensagem enviada com sucesso! Retornaremos em até 2 dias úteis. 🎉');
    }
}