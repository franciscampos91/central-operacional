<?php

    class HomeController
    {
        public function index()
        {
            try {

                $loader = new \Twig\Loader\FilesystemLoader(['app/View', 'public/js']);
                $twig = new \Twig\Environment($loader);
                $template = $twig->load('home.html');

                $parametros = array();
                $parametros['efetivo'] = Efetivo::listarEfetivo();

                $conteudo = $template->render($parametros);

                echo $conteudo;



            } catch (Exception $ex) {
                echo $ex->getMessage();
            }
        }
    }