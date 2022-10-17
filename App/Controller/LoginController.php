<?php
namespace App\Controller;

use App\Model\LoginModel;

class LoginController extends Controller
{

    public static function index() 
    {
        
        parent::render('Login/FormLogin');
   
    }

    
    public static function auth()
    {

        $model = new LoginModel();
      
        $model->email = $_POST['email'];
        $model->senha = $_POST['senha'];
       
        $usuario = $model->autenticar(); 

        if ($usuario!== null) 
        {
            $_SESSION['usuario'] = $usuario;

            header("Location: /");
        }
        else
        {
            header("Location:/login?erro=true");
        }
    }

    public static function logout()
    {
        unset($_SESSION['usuario']);

    }

}