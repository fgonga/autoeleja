<?php
$alert = '';
session_start();

require_once "../../modelo/Conexao.php";

//verifica se esta logado
if (!empty ($_SESSION['open']))
{
	header('location: /app/visao/admin/index.php');
} 
else{
	$nome = $_REQUEST['nome'];
	$senha = $_REQUEST['senha'];
	//verifica se os dados estão vasios 
	if (empty($nome) and empty($senha)) {
		header('location: /app/visao/entrar.php');
	}else{

		$query = mysqli_query($conexao, "SELECT * FROM utilizador WHERE utilizador.nome = '$nome' AND utilizador.senha = '$senha'");
		$resultado = mysqli_num_rows($query);
		if($resultado > 0)
		{
			$dados = mysqli_fetch_array($query);
			  //print_r($dados);exit;
			$_SESSION['open'] = true;
			$_SESSION ['id'] = $dados['id'];
			$_SESSION ['nome'] = $dados['nome'];
			$_SESSION ['tipo'] = $dados["tipo"];
			
			header('location: /app/visao/admin/index.php');
		}else{
			$alert ="nao";
			header('location: /app/visao/entrar.php?alerta='.$alert.'');
			session_destroy();
		}
	}

	

}
