<?php
    include('includes/conexao.php');
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $ativo = $_POST['ativo'];
    $senha = $_POST['senha'];
    $cidade = $_POST['cidade'];
    echo "<h1>Dados do cliente</h1>";
    echo "Nome: $nome<br>";
    echo "Email: $email<br>";
    $sql = "INSERT INTO cliente
    (nome, email, senha, ativo, id_cidade)";
    $sql.= " VALUES('".$nome."','".$email."','".$senha."',".$ativo.", ".$cidade.")";
    echo $sql;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <h1>Alteração de cliente</h1>
    <br>
    <a href="index.html"><button type="button" class="btn btn-outline-primary">Menu</button></a>
    <?php
        $sql = "UPDATE cliente SET
                    nome = '$nome',
                    email = '$email'
                    senha = '$senha'
                WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if($result)
            echo "Dados Atualizados!";
        else
            echo "Erro ao atualizar dados!\n".mysqli_error($con);
    ?>
</body>
</html>