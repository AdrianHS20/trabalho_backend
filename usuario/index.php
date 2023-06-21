<?php require_once "consultar_todos.php";
        require_once "../template/header.php";
    ?>
<body>
    <center>
    <fieldset id="html">
    <h1>Eventos Esportivos</h1>
    <form action="novo_cadastro.php" method="post">
        <h2>Inserir Novo Evento</h2>
        <hr>
        <label>Nome</label><br>
        <input type="text" name="nome" value=""><br>

        <label>Esporte</label><br>
        <input type="text" name="esporte"><br>

        <label for="">Data</label><br>
        <input type="text" name="dataa" id=""><br>

        <label>Local</label><br>
        <input type="text" name="local"><br><br>

        <button type="submit" style="margin-left: 20px;">Inserir</button>
        
    </form>
    <div>
    <h2>Tabela de Eventos Esportivos</h2><hr>
    <table border="1px" width="100%" style="border-radius: 10px; background-color: white;">
        <tr>
            <td>Nome</td>
            <td>Esporte</td>
            <td>Data</td>
            <td>Local</td>
        </tr>
    <?php foreach($eventos as $evento): ?>
    <tr>
      <td><?= $evento->Nome ?></td>
      <td><?= $evento->Esporte ?></td>
      <td><?= $evento->Dataa ?></td>
      <td><?= $evento->Local ?></td>
      <td width="25%">
        <a href="excluir.php?id=<?= $evento->id?>" class="btn btn-danger"><button class="excluirimg">
        <img id="excluirimg" src="../midia/excluir.png" alt=""></button></a>

        <a style="background-color: green; height: 30px;" href="manipular_dados.php?id=<?= $evento->id?>" class="btn btn-primary">
        <i class="fa-solid fa-pen-to-square"></i>
        Atualizar Dados</a>

      </td>
    </tr>
    <?php endforeach; ?>
    </table>
    </div>
    </fieldset>
</center>
</body>
</html>