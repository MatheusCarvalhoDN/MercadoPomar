<?php
namespace App\Model;
use App\Model\MySql;

class userModel{

    public function insert($nome, $email, $senha, $endereco, $telefone){
        $var = MySql::con()->prepare("INSERT INTO `user`VALUES(NULL, ?, ?, ?, ?, ?)");
        $var->execute(array($nome, $email, $senha, $endereco, $telefone));
    }

    public function login($email, $senha){
        $var = MySql::con()->prepare("SELECT * FROM `user` where email = ? && senha = ?");
        $var->execute(array($email, $senha));
        $row = $var->fetch();

        if ($var->rowCount() == 1) {
            $_SESSION['login'] = true;
            $_SESSION['id'] = $row['id'];
            $_SESSION['nome'] = $row['nome'];
            $_SESSION['senha'] = $row['senha'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['endereco'] = $row['endereco'];
            $_SESSION['telefone'] = $row['telefone'];
            return true;

        }else{
            return false;
        }

    }
}