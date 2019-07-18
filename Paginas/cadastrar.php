<?php 
if(isset($_POST['cadastrar'])){
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$email = $_POST['email'];
	$doc1 = $_POST['doc1'];
	$doc2 = $_POST['doc2'];
	$fone1 = $_POST['fone1'];
	$fone2 = $_POST['fone2'];
	$logradouro = $_POST['logradouro'];
	$nro = $_POST['numero'];
	$complemento = $_POST['complemento'];
	$bairro = $_POST['bairro'];
	$uf = $_POST['uf'];
	$cidade = $_POST['cidade'];
	$cep = $_POST['cep'];
	
	$insert = "INSERT INTO tb_empresa(id_municipo, nome_empresa, doc1_empresa, doc2_empresa ,logradouro_empresa , nro_empresa , complemento_empresa, bairro_empresa,fone1_empresa,fone2_empresa,email_empresa)
	VALUES ('0','$nome','$doc1','$doc2','$logradouro','$nro','$complemento','$bairro','$fone1','$fone2','$email')";
	$inserido = mysql_query($insert);
	
	if($inserido){
		echo('cadastrar ok');
	}else{
	echo('erro ao cadastrar').mysql_error();	
	}
	}

?>
<form id="form_n_possui" name="form_n_possui" method="post" action="" >
        
        <label>
        <span>Nome:</span>
        <input type="text" name="nome" id="nome" title="Informe o nome"/>
        </label>
        
        <label>
        <span>Sobrenome:</span>
        <input type="text" name="sobrenome" id="sobrenome" title="Informe o sobrenome" />
        </label>
        
        <label>
  		<span>E-mail:</span>
  		<input type="text" name="email" id="email" title="Informe o seu email" />
  		</label>
        
        <label>
  		<span>DOC 1:</span>
  		<input type="text" name="doc1" id="doc1" title="Informe o seu documento" />
  		</label>
        
        <label>
  		<span>DOC 2:</span>
  		<input type="text" name="doc2" id="doc2" title="Informe o seu documento" />
  		</label>
        
        <label>
  		<span>Telefone 1:</span>
  		<input type="text" name="fone1" id="fone1" title="Informe o seu telefone" />
  		</label>
        
        <label>
  		<span>Telefone 2:</span>
  		<input type="text" name="fone2" id="fone2" title="Informe um segundo telefone" />
  		</label>
        
        <label>
  		<span>Logradouro:</span>
  		<input type="text" name="logradouro" id="logradouro" title="Informe o logradouro" />
  		</label>
        
        <label>
 		<span>Numero:</span>
  		<input type="text" name="numero" id="numero" title="Informe o numero" />
  		</label>
        
        <label>
 		<span>Complemento:</span>
  		<input type="text" name="complemento" id="complemento" title="Informe o complemento" />
  		</label>
        
        <label>
  		<span>Bairro:</span>
  		<input type="text" name="bairro" id="bairro" title="Informe o bairro" />
  		</label>
        
        <label>
  		<span>UF:</span>
  		<select name="uf" id="uf" title="selecione a uf">
        <option value="PR">PR</option>
        <option value="SC">SC</option>
        <option value="RS">RS</option>
        </select>
        <input type="text" name="cidade" id="cidade" title="Informe a cidade" />
  		</label>
        
        <label>
  		<span>CEP:</span>
  		<input type="text" name="cep" id="cep" title="Informe o CEP" />
  		</label>
        
        <br />
        <input type="submit" value="Cadastrar" id="cadastrar" class="btn" />
        
        </form>