<?php

class EfetivoController
{

    public function index()
    {
        // Inicializa o Twig
        $loader = new \Twig\Loader\FilesystemLoader(['app/View', 'public/js']);
        $twig = new \Twig\Environment($loader);
        $template = $twig->load('efetivo/home.html');

        $parametros = array();
        $parametros['efetivo'] = Efetivo::listarEfetivo();
    
        $conteudo = $template->render($parametros);

        echo $conteudo;

    }

    public function pessoa()
    {
        $loader = new \Twig\Loader\FilesystemLoader('app/View');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load('efetivo/pessoa.html');

        $parametros = array();
    
        $conteudo = $template->render($parametros);

        echo $conteudo;
    }

    public function buscaSIRH()
    {
        var_dump($_POST);
        echo 'BUSCA SIRH';
    }

    public function novo()
    {
        $loader = new \Twig\Loader\FilesystemLoader('app/View');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load('efetivo/novo.html');

        $parametros = array();
    
        $conteudo = $template->render($parametros);

        echo $conteudo;
    }

    public function gravarNovo()
    {
        var_dump($_POST);
        echo 'Gravar Novo';
    }


    public function planoDeChamada()
    {
        $loader = new \Twig\Loader\FilesystemLoader('app/View');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load('efetivo/plano-chamada.html');

        $parametros = array();
        $parametros['efetivo'] = Efetivo::listarEfetivo();

        $conteudo = $template->render($parametros);

        echo $conteudo;
    }


}