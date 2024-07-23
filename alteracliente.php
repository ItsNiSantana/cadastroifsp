<?php
    include('includes/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM cliente WHERE id=$id";
    
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altera cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    
<form action="alteraclienteexe.php" method="post">
    <fieldset>
        <legend>Alteração de clientes</legend>
        <br>
        <a href="index.html"><button type="button" class="btn btn-outline-primary">Menu</button></a>
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="<?php echo $row['nome']?>">
        </div>
        <div>
                <label for="email" style="color: antiquewhite;" >Email</label>
                <input type="email" name="email" id="email" value="<?php echo $row['email']?>">
            </div>
            <div>
                <label for="senha" style="color: antiquewhite;" >Senha</label>
                <input type="password" name="senha" id="senha" value="<?php echo $row['senha']?>">
            </div>
            <input type="hidden" name="id" value = "<?php echo $row['id']?>">
        </div>
        <div>
            <button type="submit">Atualizar</button>
        </div>
    </fieldset>
</form>
</body>
</html>