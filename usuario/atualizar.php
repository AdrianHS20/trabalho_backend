<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   $id = $_POST['id'];
   $campo = $_POST['campo'];
   $novodado = $_POST['novodado'];

   //cria uma variável com um comando SQL
   $SQL = "UPDATE `eventos_esportivos` SET `$campo` = ? WHERE  `id`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("si", $novodado, $id);

   //executa o comando
   $comando->execute();

   //volta para o formulário
   header("Location: index.php");