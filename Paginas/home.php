<?php 
/*if(isset($_POST['continuar'])){
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$email = $_POST['email'];
	
	$insert = "INSERT INTO tb_categorias (nome_categoria) VALUES ('$nome_categ')";
	$inserido = mysql_query($insert);
	
	if($inserido){
		echo('cadastrar ok');
	}else{
	echo('erro ao cadastrar');	
	}
	}
*/
?>
<div id="n_possui">
    
    	<h4>Não possui ainda</h4>
        
        <li><a href="index.php?pgf=Paginas/cadastrar">Cadastrar</a></li>
        
    </div><!--fecha div n_possui -->
    
    <div id="possui">
    
    	<h4>Já possui</h4>
        
        <form id="form_login" name="form_login" method="post" action="Login/login.php">
        
        <label>
        <span>Login:</span>
        <input type="text" name="login" id="login" title="Informe o login" />
        </label>
        
        <label>
        <span>Senha:</span>
        <input type="password" name="password" id="password" title="Informe a senha" />
        </label>
        
        <br />
        <input type="submit" value="Acessar" id="logar" class="btn" />
        
        </form>
    </div><!--fecha div possui -->