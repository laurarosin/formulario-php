<?php

namespace App\Model;

use App\DAO\LoginDAO;

class LoginModel extends Model
{
    public $id, $email, $senha;
   
    public function autenticar()
    {
        $dao = new LoginDAO();
        $dados = $dao->selectByEmailAndSenha($this->email, $this->senha);

        if(is_object($dados))
        {  
            return $dados;
        } 
        else 
        {
           null;
        }
    }
}