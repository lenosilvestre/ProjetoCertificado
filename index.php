<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php
session_start();
?>
<html><head>

<meta content="text/html; charset=UTF-8" http-equiv="content-type"><title>Pesquisa</title><link rel="stylesheet" type="text/css" href="style.css" />

  <script>
	function sub()
	{
		buscar=document.getElementById("buscar").value;
		msg="";
		flag=true;
		if(buscar == "")
		{
			msg+="Informe um nome para reallizar a busca\n";
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
     
      <div id="buscarcertificado">

  <h1>Buscar Certificados</h1>
 <tbody>
 <form method="post" action="listarCertificado2.php" name="buscar" onSubmit="return sub();">
<strong>Digite o seu nome: </strong> <input name="nome" id="nome"><br>

	  <input value="Buscar certificados" type="submit" >
           <p> 
           </form>
            <a href="gerenciar.php"><input name="Voltar" value="Voltar" type="button"><a/><br/> 
          </p>
        
              
    </tbody>
  


</body></html>
