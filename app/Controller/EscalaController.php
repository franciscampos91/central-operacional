<?php

class EscalaController
{
    public function index()
    {
        $loader = new \Twig\Loader\FilesystemLoader('app/View');
        $twig = new \Twig\Environment($loader);

        $template = $twig->load('escala/index.html');

        echo $template->render([]);
    }

    public function previsao()
    {
        $loader = new \Twig\Loader\FilesystemLoader('app/View');
        $twig = new \Twig\Environment($loader);

        $template = $twig->load('escala/previsao.html');

        echo $template->render([]);
    }
}
