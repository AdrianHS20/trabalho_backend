<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   if(isset($_GET['id'])){

   $id = $_GET['id'];

   //cria uma variável com um comando SQL
   $SQL = "SELECT * FROM `eventos_esportivos` WHERE `id`= ? ;";

   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("i", $id);

   //executa o comando
   $comando->execute();

   $resultados = $comando->get_result();

   $evento = $resultados->fetch_object();

   }
?>