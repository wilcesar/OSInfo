<?php 
session_start();
include_once('../conection/conexao.php');

$login = $_POST['login'];
$senha = $_POST['password'];
//$senha = base64_encode($_POST['senha']);


//verificando os dados do usuario no banco de dados

$sql_verlogin = "SELECT id_usuario FROM tb_usuarios WHERE login_usuario = '$login' AND password = '$senha'";

$qry_ver_login = mysql_query($sql_verlogin) or die("Erro ao selecionar dados do usuario".mysql_error());
$cont = mysql_num_rows($qry_ver_login);

if($cont < '1' or $cont > '1'){
	$meta = '<meta http-equiv="refresh" content="2;URL=../index.php" />';
	echo 'teste';
	echo $meta;
	
	echo 'Login ou senha errados';
	}else{
	$pega_dados = "SELECT * FROM tb_usuarios WHERE login_usuario = '$login' AND password = '$senha'";
	$query_pega_dados = mysql_query($pega_dados);
	$res = mysql_fetch_array($query_pega_dados);
	
	$id_usuario = $res['id_usuario'];
	$nome = $res['nome_usuario'];
	$email = $res['email_usuario'];
	$login = $res['login_usuario'];
	
	//criando as sessions do usuario
	$_SESSION['ID_USUARIO'] = $id_usuario;
	$_SESSION['NOME'] = $nome;
	$_SESSION['EMAIL'] = $email;
	$_SESSION['LOGIN'] = $login;
	$_SESSION['LOG_SUCESSO'] = "true";
	
	echo"Usuario encontrado com sucesso";
	//$meta = '<meta http-equiv="refresh" content="2;URL=../admin/index.php" />';
	//echo $meta;

	
	}
?>