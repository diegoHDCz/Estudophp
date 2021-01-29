<?php
require 'config.php';
require 'dao/usuarioDaoMysql.php';

$usuarioDao = new usuarioDaoMysql($pdo);

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($name && $email){

    if($usuarioDao->findByEmail($email) ===false ){
        $novoUsuario = new Usuario();
        $novoUsuario->setNome($name);
        $novousuario->setEmail($email);

        $usuarioDao->add($novoUsuario); 

        header("Location: index.php");
        exit;
    }else{
        header("Location: add.php");
        exit;
    }


}else{
    header("Location: add.php");    
    exit;
}
