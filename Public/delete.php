<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Sistema Crud</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="crud">
    <h3>Atualização de Dados</h3>

    <?php
    require('../app/DataBase.php');
    $DataBase = new DataBase();
    $sql = "DELETE FROM usuarios WHERE id = :id";
    $binds = ['id'=> 4];
    $result = $DataBase->delete($sql, $binds);
    if ($result){
        echo "<div class='success'>Deletado com Sucesso!!</div>";

    }else{
        echo "nao foi Deletar";
    }

    ?>
</div>
</body>
</html>