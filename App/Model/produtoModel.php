<?php

namespace App\Model;

class produtoModel{
    public function insert($nome, $preco, $categoria, $img){
        $con = MySql::con()->prepare("INSERT INTO `produto` VALUES(NULL, ?, ?, ?, ?)");
        $con->execute(array($nome, $preco, $categoria, $img));
    }

    public function selectAll(){
        $con = MySql::con()->prepare("SELECT * FROM `produto` ");
        $con->execute();
        return $con->fetchall();
    }

    public function selectW($cat){
        $con = MySql::con()->prepare("SELECT * FROM `produto` WHERE categoria = ?");
        $con->execute(array($cat));
        return $con->fetchall();
    }
}