<?php

namespace App\Class;

class uploads{
    
    public function upload($file){
        if ($file['type']  == 'image/jpeg' || $file['type']  == 'image/jpg' || $file['type']  == 'image/png'){
            $formato = explode('.', $file['name']);
            $nome = 'IMG-'.uniqid().'.'.$formato[count($formato)-1];
            if(move_uploaded_file($file['tmp_name'], 'Public/Uploads/'.$nome)){
                return $nome;
            }
        }else{
            return false;
        }
    }

    public function deleteFile($file){
        @unlink('Public/Uploads/'.$file);
    }
}