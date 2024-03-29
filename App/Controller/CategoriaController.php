<?php
namespace App\Controller;

use App\Model\CategoriaModel;

class CategoriaController extends Controller
{

    public static function index() 
    {
        include 'Model/CategoriaModel.php'; 
        
       
        $model = new CategoriaModel();
        $model->getAllRows();
        include 'View/modules/Categoria/ListaCategoria.php';
    }

    
    public static function form()
    {
        include 'Model/CategoriaModel.php'; 
        $model = new CategoriaModel();
      
        if(isset($_GET['id']))
        $model = $model->getById( (int) $_GET['id']);
        include 'View/modules/Categoria/FormCategoria.php';
    }


    public static function save() {

        include 'Model/CategoriaModel.php'; 
        $categoria = new CategoriaModel();
        $categoria->id = $_POST['id'];
        $categoria->descricao = $_POST['descricao'];
       
        

        $categoria->save();  

        header("Location: /Categoria"); 
    }

    public static function delete()
    {
        include 'Model/CategoriaModel.php'; 

        $model = new CategoriaModel();

        $model->delete( (int) $_GET['id'] ); 

        header("Location: /Categoria"); 
    }

}