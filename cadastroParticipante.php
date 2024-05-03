<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<?php
include_once ("controle.php");
include "banco.php";
$b = new database();
?>

<html><head>
  
  <meta content="text/html; charset=UTF-8" http-equiv="content-type">
  <title>Cadastro Participante</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <script>
	function sub()
	{
		nome=document.getElementById("nome").value;
		evento=document.getElementById("evento").value;
		tipo=document.getElementById("tipo_participacao").value;
		msg="";
		flag=true;
		if(nome == "")
		{
			msg+="Preencha o campo nome \n";
			flag=false;
		}
		if(evento == ">> Selecione o Evento <<")
		{
			msg+="Selecione o Evento \n";
			flag=false;
		}
		if(tipo == ">> Selecione a participação <<")
		{
			msg+="Selecione o Tipo de participação \n";
			flag=false;
		}
		if(!flag)
		{
			alert(msg);
		}
		return flag;
}
</script>
		

		</head><body><br>

 <div class="content">      
     
      <div id="Cadastroparticipante">
        <form method="post" action="inserirParticipante.php" name="aluno" onSubmit="return sub();"> 
          <h1>Informações do Participante</h1> 
          <p> 
            <label for="nome">Nome</label>
            <input name="nome" id="nome" required="required" type="text" placeholder="ex. João Reis"/>
          </p>
           
          <p> 
            <label for="senha">Evento:</label>
           <select name="evento" id="evento" size="1">
				<option>  Selecione o Evento  </option>
			<?php	
				$stmt = $b ->busca("select * from evento");
				while($rs = $stmt->fetch(PDO::FETCH_OBJ)){
					echo "<option> ".$rs -> nome." </option>";
				}
			?>
			
        </select>
          </p>
         <label for="senha">Tipo de Participante:</label>
         <select name="tipo_participacao" id="tipo_participacao" size="1">
				
					<option>  Selecione a participação </option>
					<option> Ouvinte </option>
					<option> Organizador </option>
			
        </select>   
         
           
          <p> 
            <input value="Enviar Informacões" type="submit"><br/> 
          </p>
            <p> 
            <a href="gerenciar.php"><input name="Voltar" value="Voltar" type="button"><a/><br/> 
          </p>
          
        </form>
      </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

</body></html>