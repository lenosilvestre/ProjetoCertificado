
<?php

include ("banco.php");
	
	$b = new database();
	$nome = $_POST['nome'];
	$consulta = $b -> busca("select * from pessoa where nome='$nome';");
	$contador=0;
	
	//consulta se já existe o nome no banco de dados
	while($rs = $consulta->fetch(PDO::FETCH_OBJ)){
		$contador++;
	}
	
	//se não exite insere no banco um novo participante
	if($contador ==0 ){
	$b -> query("insert into pessoa (nome) values('$nome')");
	}
	
	//consulta o id do participante
	$consulta2 = $b -> busca("select * from pessoa where nome='$nome';");
	$idpessoa = 0;
	while($rs2 = $consulta2->fetch(PDO::FETCH_OBJ)){
				$idpessoa =  $rs2 -> id;
				break;
	}
	
	//consulta o id do evento
	$evento = $_POST['evento'];
	$idevento=0;
	$consulta3 = $b -> busca("select * from evento where nome='$evento';");
	while($rs3 = $consulta3->fetch(PDO::FETCH_OBJ)){
				$idevento =  $rs3 -> id;
				break;
	}
	
	//inserir na tabela certificado
	$participacao = $_POST['tipo_participacao'];
	$sql ="insert into certificado (pessoa_id, evento_id, tipo_participacao) values('$idpessoa', $idevento,'$participacao')";
	$b -> query($sql);

	
	
	
	echo"<script type='text/javascript'> alert('Certificado cadastrado com sucesso');</script>";
	echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL = cadastroParticipante.php'>";
	


?>
