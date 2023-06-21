<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   if(isset($_POST['nome']) && isset($_POST['esporte']) && isset($_POST['dataa'])){

   $nome = $_POST['nome'];
   $esporte = $_POST['esporte'];
   $dataa = $_POST['dataa'];
   $local = $_POST['local'];

   //cria uma variável com um comando SQL
   $SQL = "INSERT INTO `eventos_esportivos` (`Nome`, `Esporte`, `Dataa`, `Local`) VALUES (?, ?, ?, ?);";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("ssss", $nome, $esporte, $dataa, $local);

   //executa o comando
   $comando->execute();
   }
   //volta para o formulário
   header("Location: index.php");
