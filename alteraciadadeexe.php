<?php
    include('includes/conexao.php');
    $nome = $_GET['nome'];
    $estado = $_GET['estado'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Alteração de cidade</h1>
    <?php
        $sql = "UPDATE cidade SET
                    nome = '$nome',
                    estado = '$estado'
                WHERE id = $id";
        $result = mysql_query($con, $sql);
        if($result)
            echo "Dados Atualizados!";
        else
            echo "Erro ao atualizar dados!\n".mysqli_error($con);
    ?>
</body>
</html>