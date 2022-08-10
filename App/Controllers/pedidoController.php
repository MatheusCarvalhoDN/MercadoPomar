<?php

namespace App\Controllers;
use App\Model\pagamentoModel;

class pedidoController{

    public function __construct() {
        $this->pedido = new pagamentoModel;
    }

    public function Select(){
        if (!isset($_SESSION['login'])) {
            $this->redirect();
        }
        return $this->pedido->selectAll();
    }

    public function pedido(){
        $this->render('pedido', 'template');
    }

    public function redirect($get = ''){
        echo "<script> window.location.href = '".url."".$get."'</script>";
    }

    public function content(){
        include $this->view;
    }

    public function render($view, $template){
        $this->view = "App\\View\\www\\".$view.".php";
        include "App\\View\\".$template.".php";
    }
}