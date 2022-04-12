<?php
require_once "../../modelo/Conexao.php";
//Busca o id da url
$id = $_GET['id'];
//Executa a consulta no banco de dados para eliminar o candidato
$query = mysqli_query($conexao, "DELETE  FROM pessoa WHERE  id=$id");
if ($query) {
	return header('location: /app/visao/admin/candidatos/lista.php?erro=nao&mensagem=Candidato eliminado');
}
header('location: /app/visao/admin/candidatos/lista.php?erro=sim&mensagem=Não foi possivel eliminar');