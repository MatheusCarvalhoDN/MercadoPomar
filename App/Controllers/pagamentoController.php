<?php

namespace App\Controllers;
use App\Model\pagamentoModel;
use App\Model\carrinhoModel;
class pagamentoController{

    public function __construct() {
        $this->pagamento = new pagamentoModel;
        $this->carrinho = new carrinhoModel;
    }

    public function pagamento(){
        if (count($this->carrinho->selectW()) == 0) {
            $this->redirect();
        }
        $this->render('pagamento', 'template');
    }

    public function postPagamento(){
        if (count($this->carrinho->selectW()) == 0) {
            $this->redirect();
        }
        $this->pagamento->pagar();
        $this->render('pagamento', 'template');
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