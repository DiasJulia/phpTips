<?php


namespace Source\Controllers;


use League\Plates\Engine;

class ViewController
{
    private $view;

    public function __construct()
    {
        /**
         * Monitoramento global do site
         */
        $this->view = Engine::create(__DIR__ . "/../Views", "php");
    }

    public function home()
    {
        echo $this->view->render("index", [
            "title" => "Home | ",
            "url" => URL_BASE . "user/cadastro"
        ]);
    }

    public function error($data)
    {
        echo $data['errcode'];
    }

}