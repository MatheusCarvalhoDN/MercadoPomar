<?php

namespace App\Model;
use App\Model\MySql;

class carrinhoModel{
    public function insert($prod, $qnt){
        $con1 = MySql::con()->prepare("SELECT * FROM `carrinho` WHERE id_user = ? && id_prod = ?");
        $con1->execute(array($_SESSION['id'], $prod));
        if ($con1->rowCount() == 0) {
            $con = MySql::con()->prepare("INSERT INTO `carrinho` VALUES(NULL, ?, ?, ?, ?)");
            $con->execute(array($prod, $_SESSION['id'], $qnt, ''));
        }
    }

    public function selectAll(){
        $con = MySql::con()->prepare("SELECT * FROM `carrinho` ");
        $con->execute();
        return $con->fetchall();
    }

    public function delete($id){
        $con = MySql::con()->prepare("DELETE FROM `carrinho` WHERE id = ?");
        $con->execute(array($id));
    }

    public function pago($id){
        $con = MySql::con()->prepare("UPDATE `carrinho` SET pago = ? WHERE id = ?");
        $con->execute(array('pago',$id));
    }

    public function update($id, $qntd){
        $con = MySql::con()->prepare("UPDATE `carrinho` SET qntd = ? WHERE id = ?");
        $con->execute(array($qntd, $id));
    }


    public function selectW(){
        $con = MySql::con()->prepare("SELECT carrinho.*, prod.nome as prodnome, prod.preco as preco FROM `carrinho` INNER JOIN produto as prod ON prod.id = carrinho.id_prod WHERE id_user = ? && pago = ?");
        $con->execute(array($_SESSION['id'], ''));
        return $con->fetchall();
    }
}