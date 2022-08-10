<?php

namespace App\Controllers;
use App\Class\uploads;
use App\Model\produtoModel;

class produtoController{

    public function __construct() {
        $this->uploads = new uploads;
        $this->produto = new produtoModel;
    }

    public function produto(){
        $this->render('produto', 'template');
    }

    public function postProduto(){
        $img = $this->uploads->upload($_FILES['file']);
        if ($img) {
            $this->produto->insert($_POST['nome'], $_POST['preco'], $_POST['categoria'], $img);
            $this->redirect('produto');
        }else {
            $this->redirect('produto');
        }
        $this->render('produto', 'template');
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