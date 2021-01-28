<?php
require 'config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM usuarios ");

if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}

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
        <td><?php echo $usuario['id']; ?></td>
        <td><?php echo $usuario['nome']; ?></td>
        <td><?php echo $usuario['email'] ?></td>
        <td>
            <a href="editar.php?id=<?=$usuario['id'];?>">[ editar ]</a>
            <a href="excluir.php?id=<?=$usuario['id'];?>" onclick="return confirm('Está certo disso?')" >[ excluir ]</a>
        </td>
    </tr>
    <?php endforeach ?>
</table>    