<?php

namespace App\Model;
use App\Model\MySql;
use App\Model\carrinhoModel;

class pagamentoModel{

    public function __construct() {
        $this->carrinho = new carrinhoModel;
    }

    public function pagar(){
        foreach ($this->carrinho->selectW() as $value) {
            $con = MySql::con()->prepare("INSERT INTO `pedidos` VALUES(NULL, ?, ?, ?)");
            $con->execute(array($value['id_prod'], $_SESSION['id'], $value['qntd']));
            $this->carrinho->pago($value['id']);
        }
    }

    public function selectAll(){
        $con = MySql::con()->prepare("SELECT pedidos.*, prod.nome as prodnome, prod.preco as preco FROM `pedidos` INNER JOIN produto as prod ON prod.id = pedidos.id_prod WHERE id_user = ?");
        $con->execute(array($_SESSION['id']));
        return $con->fetchall();
    }

}