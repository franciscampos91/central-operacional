<?php

class EfetivoController
{

    public function index()
    {
        // Inicializa o Twig
        $loader = new \Twig\Loader\FilesystemLoader('app/View');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load('efetivo/home.html');

        $parametros = array();
    
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

}