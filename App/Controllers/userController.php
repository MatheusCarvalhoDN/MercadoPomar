<?php

namespace App\Controllers;
use App\Model\userModel;

class userController{

    public function __construct() {
        $this->user = new userModel;
    }

    public function sair(){
        session_destroy();
        $this->redirect('login');
    }

    public function login(){
        if (isset($_SESSION['login'])) {
            $this->redirect();
        }
        $this->render('login', 'login');
    }

    public function postLogin(){
        if (isset($_SESSION['login'])) {
            $this->redirect();
        } else if ($_POST["email"] == '' || $_POST["senha"] == '') {
            $this->redirect('login');
        }else if($this->user->login($_POST["email"], $_POST["senha"])){
            $this->redirect();
        }
        $this->render('login', 'login');
    }

    public function cadastro(){
        if (isset($_SESSION['login'])) {
            $this->redirect();
        }
        $this->render('cadastro', 'cadastro');
    }

    public function postCadastro(){
        if (isset($_SESSION['login'])) {
            $this->redirect();
        }
        $if = true;
        foreach ($_POST as $value) {
            if ($value == '') {
                $if = false;
                $this->redirect('cadastro');
                break;
            }
        }

        if ($if) {
            $this->user->insert($_POST["nome"], $_POST["email"], $_POST["psw"], $_POST["endereço"], $_POST["telefone"]);
            $this->redirect('login');

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