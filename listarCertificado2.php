<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php
include ("banco.php");
$b = new database();
$nome = $_POST['nome'];

if(empty($nome)){
    include("index.php");
}

?>



<html><head<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" http-equiv="content-typ"><title>Certificados</title>
<link rel="stylesheet" type="text/css" href="style.css" />

</head>
<body>


<br>
<br>
<br>
<br>
 
		
<br>
<table style="text-align: left;  height: 58px; margin-left: auto; margin-right: auto;" border="1" cellpadding="2" cellspacing="2">

<h1> A pesquisa retornou os seguintes Certificados </h1>
	
	<tr>
		<td style="width: 350px">
			Nome
		</td>
		<td style="width: 350px">
			Evento
		</td>
		<td> Data </td>
		<td>Tipo</td>
		<td style="height:auto">Descrição</td>
	    <td>Carga Horaria</td>
	    <td>Observações</td>
	    <td>Imprimir</td>
	    
	</tr>

 <br>
	<?php
	
	$stmt = $b ->busca("select * from pessoa where nome LIKE '%$nome%';");
	
	$result = $stmt->fetchAll();
    $result2="";
    
    $nomepessoa;
    $nomeevento;
    $data;
    $tipo;
    $descricao;
    $observacao;
    $cargaH;
    $msg="";
   
   
    
    
	if ( count($result) ) {
        
        foreach($result as $row) {
           
           // print_r($row['id']." - ".$row['nome']."<br>");
            $nomepessoa = $row['nome'];
            $idpessoa = $row['id'];
            
            $stmt2 = $b ->busca("select * from certificado where pessoa_id='$idpessoa';");
            $result2 = $stmt2->fetchAll();
                
            if ( count($result2) ) {
                foreach($result2 as $row) {
                       $idevento = $row['evento_id'];
                       $tipo = $row['tipo_participacao'];
                       
                    $stmt3 = $b ->busca("select * from evento where id='$idevento';");
                    $result3 = $stmt3->fetchAll();
                       
                    if ( count($result3) ) {
                        foreach($result3 as $row) {
                            $nomeevento = $row['nome'];
                            $data = $row['data_inicio'];
                            $descricao = $row['descricao'];
                            $cargaH = $row['carga_horaria'];
                            $observacao = $row['observacao'];
                            
                            
                
                                
                            
                         echo "<tr> <td>".$nomepessoa."</td>
                         <td>".$nomeevento."</td> <td>".$data."</td> 
                         <td>".$tipo."</td> <td>".$descricao."</td> 
                         <td>".$cargaH."</td> <td>".$observacao."</td>
                         <td> <a href='imprimir.php?idp=".$idpessoa."&idevento=".$idevento."'>
                         <input name='imprimir' value='Clique aqui' type='button'> </a></td></tr>";
                        
                        
                            
                        }
                    }
                       
                }
            }
            
        }
    } else {
        $msg = "Nenhum resultado retornado.";
    }
    	
	?>

 
</table>
<?php echo $msg; ?>
<br>
<p> 
            <a href="index.php"><input name="Voltar" value="Voltar" type="button"></a><br> 
          </p>
</div>


 
</body>
</html>



