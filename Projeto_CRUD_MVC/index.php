<?php

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


include 'Controller/PessoaController.php';
include 'Controller/ProdutoController.php';
include 'Controller/CategoriaController.php';

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

    
    case '/produto':
        ProdutoController::index();
    break;

    case '/produto/form':
        ProdutoController::form();
    break;

    case '/produto/save':
        ProdutoController::save();
   

     break;
    case '/categoria':
        CategoriaController::index();
    break;

    case '/categoria/form':
        categoriaController::form();
    break;

    case '/categoria/save':
        CategoriaController::save();
    break;
    
    
    
    case '/formulario':
        include 'View/udy.php';
    break;

    case '/processa':
        echo "vai pegar o que o usuário digitou <br />";
        echo $_POST['nome'];
        echo "<br />";
        var_dump($_POST);
    break;

    case '/produto':
        echo "listar produtos";
    break;

    case '/produto/ver':
        echo "ver detalhes de produto";
    break;

    case '/produto/delete':
        echo "remover produto";
    break;

    case '/produto/salvar':
        echo "salva no banco de dados";
    break;

    default:
        echo "erro 404";
    break;
}