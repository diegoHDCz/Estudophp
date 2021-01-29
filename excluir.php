<?php
require 'config.php';
require 'dao/usuarioDaoMysql.php';

$usuarioDao = new usuarioDaoMysql($pdo);

$id = filter_input(INPUT_GET, 'id');

if($id){

    $usuarioDao->delete($id);

}

header("Location: index.php");
exit;