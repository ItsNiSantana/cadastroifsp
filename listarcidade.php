<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body style="background-color: azure;">
    <?php
        include('includes/conexao.php');

        $sql = "SELECT * FROM cidade";

        //executa a consulta
        $result = mysqli_query($con, $sql);
    ?>
    <h1>Consulta de Cidades</h1>
    <a href="cadastrocidade.html"><button type="button">Cadastrar nova cidade</button></a>
    <table align="center" border="1" width="50%" style="background-image: url('../img/gatoo.jfif')">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Estado</th>
            <th>Alterar</th>
            <th>Excluir</th>

        </tr>
        <?php
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["nome"]."</td>";
                echo "<td>".$row["estado"]."</td>";
                echo "<td><a href='alteraCidade.php?id=". $row['id']."'>Alterar</a></td>";
                echo "<td><a href='deletaCidade.php?id=". $row['id']."'>Deletar</a></td>";
                echo "</tr>";
            }
        ?>
    </table>

</body>
</html>