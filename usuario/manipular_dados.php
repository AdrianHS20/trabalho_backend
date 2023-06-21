<?php include_once "consultar_por_id.php"; 
    include_once "../template/header.php"
    ?>
<body>
    <center>
    <fieldset id="html">
    <h1>Alterar os Dados</h1>
    <hr>
    <h2>Dados Atuais</h2>
    <table border="1px">
        <tr>
            <td>Nome</td>
            <td>Esporte</td>
            <td>Data</td>
            <td>Local</td>
        </tr>
        <tr>
            <td><?= $evento->Nome ?> </td>
            <td><?=$evento->Esporte?></td>
            <td><?=$evento->Dataa?></td>
            <td><?=$evento->Local?></td>
        </tr>
    </table>
    <hr>
    <h2>Atualizar Dado</h2>
    <form action="atualizar.php" method="post">
        <label for="">ID do cadastro que deseja modificar</label><br>
        <input type="text" name="id" value="<?=($_GET['id'])?>">
        <br>
        <label for="">Campo que deseja alterar</label><br>
        <input type="text" name="campo" id="campoalt"><br>
        <label for="">Novo dado a ser colocado no campo</label><br>
        <input type="text" name="novodado" id="dadoalt"><br>
        <input type="submit" value="Enviar">
    </form>
    <br>
    <a style="margin-left: 20px;" href="index.php"><button>Voltar</button></a>
    </fieldset>
</center>
</body>
</html>