<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body style="background-color: antiquewhite;">
    <h1>Cadastrar cliente</h1>
    <br>
    <a href="index.html"><button type="button" class="btn btn-outline-primary">Menu</button></a>
    <br>
    <form action="cadastroclienteexe.php" method="post" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrJrJWwo37U7TduL95tUy_XlYyKXMePBGuxg&s);">
        <fieldset>
            <legend style="color: antiquewhite;">Cadastro do Cliente</legend>
            <div>
                <label for="nome" style="color: antiquewhite;">Nome</label>
                <input type="text" name="nome" id="nome">
            </div>
            <div>
                <label for="email" style="color: antiquewhite;" >Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="senha" style="color: antiquewhite;" >Senha</label>
                <input type="password" name="senha" id="senha">
            </div>
            <div>
                <label for="ativo" style="color: antiquewhite;">Situação</label>
                <input type="hidden" name="ativo" id="ativo" value="0">
                <input type="checkbox" name="ativo" id="ativo" value="1">Ativo
                <br><br>
            </div>
            <div>
                <label for="cidade">Cidade</label>
                <select name="cidade" id="cidade">
                    <?php
                    include('includes/conexao.php');
                    $sql = "SELECT * FROM cidade";
                    $result = mysqli_query($con,$sql);
                    while($row = mysqli_fetch_array($result)){
                        echo "<option value='". $row['id']."'>".$row['nome']."/".$row['estado']."</option>";
                    }
                    ?>
                </select>
            </div>
            <br>
            <div>
                <button type="submit">Cadastrar</button>
            </div>
        </fieldset>
    </form>
</body>
</html>