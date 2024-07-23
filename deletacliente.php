<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <h1>Deletar cidade</h1>
    <br>
    <a href="index.html"><button type="button" class="btn btn-outline-primary">Menu</button></a>
    <br>
    <?php
        include('includes/conexao.php');
        $id = $_GET['id'];
        $sql = "DELETE
                FROM cliente
                WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if($result){
            echo "<h2>Dados deletados!</h2>";
        }
        else{
            echo "<h2>Erro ao deletar!</h2>";
            echo "<h2>".mysqli_error($con)."</h2>";
        }

    ?>
</body>
</html>