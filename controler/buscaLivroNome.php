<?php
    include_once("../model/conexao.php");
    include_once("../model/livroModel.php");
    
    
    $nome = $_POST["jogoUsu"];
    
    if(visuLivroNome($conn, $nomelivro)){
        header("Location:../view/visuLivroNome.php");
    }else{
        header("Location:../view/visuLivroNome.php");
    }

?>