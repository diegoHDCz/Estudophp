<?php
require 'config.php';
require 'dao/usuarioDaoMysql.php';

$usuarioDao = new usuarioDaoMysql($pdo);
$lista = $usuarioDao->findAll();

?>

<a href="add.php">ADICIONAR USUARIO</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($lista as $usuario): ?>
    <tr>
        <td><?=$usuario->getId(); ?></td>
        <td><?=$usuario->getNome(); ?></td>
        <td><?=$usuario->getEmail(); ?></td>
        <td>
            <a href="editar.php?id=<?=$usuario->getId()?>">[ editar ]</a>
            <a href="excluir.php?id=<?=$usuario->getId()?>" onclick="return confirm('Está certo disso?')" >[ excluir ]</a>
        </td>
    </tr>
    <?php endforeach ?>
</table>    