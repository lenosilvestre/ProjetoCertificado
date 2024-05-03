<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head><meta content="text/html; charset=UTF-81" http-equiv="content-type"><title>Cadastrar evento</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<?php
include_once ("controle.php");
?>

<script>
	function sub()
	{
		nomeEvento=document.getElementById("nomeEvento").value;
		datainicio=document.getElementById("dataInicio").value;
		cargaHoraria=document.getElementById("carga_horaria").value;
		
		msg="";
		flag=true;
		if(nomeEvento == "")
		{
			msg+="Preencha o campo Nome \n";
			flag=false;
		}
		if(datainicio == "")
		{
			msg+="Preencha o campo Nome \n";
			flag=false;
		}
		if(cargaHoraria == "")
		{
			msg+="Preencha o campo Nome \n";
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
     
      <div id="Cadastrarevento">
        <form method="post" action="inserirEvento.php" name="addTerminalidade" onSubmit="return sub();">
          <h1>Cadastrar evento</h1> 
          <p> 
            <label for="nome_evento">Nome do evento</label>
            <input name="nomeEvento" id="nomeEvento" required="required" type="text" placeholder="ex. Semana da computação"/>
          </p>
           
          <p> 
            <label for="data_inicio">Data de início</label>
            <input name="dataInicio" id="dataInicio" required="required" type="date" placeholder="ex. 01/01/2020" /> 
          </p>
           
          <p> 
            <label for="data_fim">Data de encerramento</label>
            <input name="dataFim" id="dataFim" type="date" placeholder="ex. 03/01/2020" /> 
          </p>
           
           <p> 
            <label for="carga_horaria">Carga horaria(h)</label>
            <input name="carga_horaria" id="carga_horaria" required="required" type="text" placeholder="ex. 24h" /> 
          </p>

 <p> 
            <label for="senha">Descrição</label>
           <textarea  name="descricao" id="descricao" style="margin: 0px; height: 70px; width: 435px;"></textarea>
          </p>


          <p> 
            <label for="senha">Observações</label>
            <textarea  name="observacao" id="observacao" style="margin: 0px; height: 70px; width: 435px;"></textarea>
          </p>

          <p> 
           <input name="enviar" value="Salvar" type="submit"></input>
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
