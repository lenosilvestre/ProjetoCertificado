
<?php

include ("banco.php");

	
	$b = new database();
	$nome = $_POST['nomeEvento'];
    $dataInicio = $_POST['dataInicio'];
	$datafim =$_POST['dataFim'];
	$cargahoraria =$_POST['carga_horaria'];
	$descricao =$_POST['descricao'];
	$observacao =$_POST['observacao'];
	
	$consulta = $b -> busca("select * from evento where nome='$nome' and data_inicio='$dataInicio';");
	$contador=0;
	
	//consulta se já existe o nome no banco de dados
	while($rs = $consulta->fetch(PDO::FETCH_OBJ)){
		$contador++;
	}
	
	//se não exite insere no banco um novo Evento
	if($contador ==0 ){
		$b -> query("insert into evento (nome, data_inicio,carga_horaria, descricao, observacao, data_fim) values('$nome','$dataInicio','$cargahoraria','$descricao ','$observacao','$datafim')");
		echo"<script type='text/javascript'> alert('Evento Cadastrado com sucesso');</script>";
		echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL = gerenciar.php'>";
	}else{
		echo"<script type='text/javascript'> alert('Evento já existe');</script>";
		echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL = novoEvento.php'>";
	}
	
	
	
	
	
	


?>
