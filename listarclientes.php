<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body style="background-color: azure;">
    
    <?php
        include('includes/conexao.php');

        $sql = "SELECT cli.id, cli.nome nomecliente, cli.email, cli.ativo, cid.nome nomecidade, cid.estado
                FROM cliente.cli
                LEFT JOIN cidade cid on cid.id = cli.id";

        //executa a consulta
        $result = mysqli_query($con, $sql);
    ?>
    <h1>Consulta de Clientes</h1>
    <br>
    <a href="index.html"><button type="button" class="btn btn-outline-primary">Menu</button></a>
    <a href="cadastrocliente.php"><button type="button" class="btn btn-outline-primary">Cadastrar novo cliente</button></a>
    <table align="center" border="1" width="50%" style="background-image: url('../img/gatoo.jfif')">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ativo</th>
            <th>Alterar</th>
            <th>Excluir</th>

        </tr>
        <?php
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["nome"]."</td>";
                echo "<td>".$row["email"]."</td>";
                echo "<td>".$row["ativo"]."</td>";
                echo "<td><a href='alteracliente.php?id=". $row['id']."'>Alterar</a></td>";
                echo "<td><a href='deletacliente.php?id=". $row['id']."'>Deletar</a></td>";
                echo "</tr>";
            }
        ?>
    </table>

</body>
</html>