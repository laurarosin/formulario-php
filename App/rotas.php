<?php

use App\Controller\
{
    PessoaController,
    ProdutoController,
    CategoriaController,
    FuncionarioController,
    LoginController
};


$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);



switch($uri_parse)
{
    case '/pessoa':
        PessoaController::index();
    break;

    case '/pessoa/form':
        PessoaController::form();
    break;

    case '/pessoa/save':
        PessoaController::save();
    break;

    case '/pessoa/delete':
        PessoaController::delete();
    break;
    

    
    
    case '/produto':
        ProdutoController::index();
    break;
    
    case '/produto/form':
        ProdutoController::form();
        break;

    case '/produto/save':
        ProdutoController::save();
    break; 
    
    case '/produto/delete':
        ProdutoController::delete();
    break; 




    case '/Categoria':
        CategoriaController::index();
    break;

    case '/Categoria/form':
        CategoriaController::form();
    break;

    case '/Categoria/save':
        CategoriaController::save();
    break;
    case '/Categoria/delete':
        CategoriaController::delete();
    break;



    case '/funcionario':
        FuncionarioController::index();
    break;

    case '/funcionario/form':
       FuncionarioController::form();
    break;

    case '/funcionario/save':
        FuncionarioController::save();
    break;
    case '/funcionario/delete':
        FuncionarioController::delete();
    break;

    case '/login':
        LoginController::index();
    break;

    case'/login/auth':
        LoginController::auth();
    break;

    case 'login/logout':      
        LoginController::logout();
    break;  

    default:
    echo "erro 404";
break;
    

}