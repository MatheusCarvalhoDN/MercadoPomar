<?php

namespace App\Controllers;
use App\Model\carrinhoModel;

class carrinhoController{

    public function __construct() {
        $this->carrinho = new carrinhoModel;
    }

    public function selectW(){
        return $this->carrinho->selectW();
    }

    public function carrinho(){
        if (!isset($_SESSION['login'])) {
            $this->redirect();
        }
        $this->render('carrinho', 'template');
    }

    public function postCarrinho(){
        $res = [];
        if (isset($_SESSION['login'])) {
            $this->carrinho->insert($_POST['id'], 1);
            exit(json_encode($res));
        }else{
            $res['error'] = 'você não pode adicionar ao carrinho pq vc não esta logado';
            exit(json_encode($res));
        }
    }

    public function removeCarrinho(){
        $res = [];
        if (isset($_SESSION['login'])) {
            $this->carrinho->delete($_POST['id']);
        }else{
            $res['error'] = 'você não pode adicionar ao carrinho pq vc não esta logado';
            exit(json_encode($res));
        }
    }

    public function upCarrinho(){
        $res = [];
        if (isset($_SESSION['login'])) {
            $this->carrinho->update($_POST['id'], $_POST['qntd']);
        }else{
            $res['error'] = 'você não pode adicionar ao carrinho pq vc não esta logado';
            exit(json_encode($res));
        }
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