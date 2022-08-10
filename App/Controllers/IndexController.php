<?php

namespace App\Controllers;
use App\Model\produtoModel;

class indexController{

    public function __construct() {
        $this->produto = new produtoModel;
    }
    
    public function selectWP($cate){
        return $this->produto->selectW($cate);
    }

    public function index(){
        $this->render('index', 'template');
    }

    public function content(){
        include $this->view;
    }

    public function render($view, $template){
        $this->view = "App\\View\\www\\".$view.".php";
        include "App\\View\\".$template.".php";
    }
}