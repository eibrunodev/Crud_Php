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
    $sql = "UPDATE usuarios SET descricao = :descricao WHERE id = :id";
    $binds = ['descricao'=>'Sou o Bruno','id'=> 4];
    $result = $DataBase->update($sql, $binds);
    if ($result){
        echo "<div class='success'>Realizado com Sucesso!!</div>";

    }else{
        echo "nao foi atualizado";
    }

    ?>
</div>
</body>
</html>