<?php  
header('Content-type: text/html; charset=UTF-8');
include ("banco.php");
$b = new database();

$idpessoa = $_GET["idp"];
$idevento =$_GET['idevento'];


    $stmt = $b ->busca("select * from pessoa where id = '$idpessoa';");
	
	$result = $stmt->fetchAll();
    $result2="";
    
    $nomepessoa;
    $nomeevento;
    $data;
    $tipo;
    $descricao;
    $observacao;
    $cargaH;
    

    foreach($result as $row) {
  
       // print_r($row['id']." - ".$row['nome']."<br>");
        $nomepessoa = $row['nome'];
        $stmt2 = $b ->busca("select * from certificado where pessoa_id='$idpessoa' and evento_id='$idevento';");
        $result2 = $stmt2->fetchAll();
            
    
        foreach($result2 as $row) {
            $tipo = $row['tipo_participacao'];
               
            $stmt3 = $b ->busca("select * from evento where id='$idevento';");
            $result3 = $stmt3->fetchAll();
               
        
            foreach($result3 as $row) {
                $nomeevento = $row['nome'];
                $data = $row['data_inicio'];
                $descricao = $row['descricao'];
                $cargaH = $row['carga_horaria'];
                $observacao = $row['observacao'];
           
            }
        }
           
    }
    
    $dataInicio = explode("-",$data);
    $ANO = $dataInicio[0];
    $MES = $dataInicio[1];
    $DIA = $dataInicio[2];
    $meses = array('', 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
    $MES = intval($MES);

 
                
$html1 = "<html>

<head><meta http-equiv='Content-Type' content='text/html; charset=UTF-8' http-equiv='content-type'><title>Certificados</title>
<link rel='stylesheet' type='text/css' href='style.css' />

</head>
<body>
<br><br><br><br><br><br><br><br>
<div class='titulo'>
<h1>Certificado</h1>
</div>
<br><br><br>

<table>
	<tr><td><div class='texto'><p>Certificamos que ".$nomepessoa." participou como ".$tipo." do ".$nomeevento.", ".$descricao." realizado no dia ".$DIA."
         de ".$meses[$MES]." de ".$ANO." com carga horária total de ".$cargaH." horas.<br> Observações: ".$observacao."</p></div>
	</td></tr>
        
         </body>
</html>";
    


//referenciar o DOMPDF com namespace
	use Dompdf\Dompdf;
	// include autoloader
	require_once 'dompdf/autoload.inc.php';
	
	//criando a instancia
	$dompdf = new DOMPDF();
	
	//endereco da pagina
	//$html = file_get_contents($html1);
	
	//$html = incov('UTF-8','Windows-1250',$html);
	$dompdf->load_html($html1);
	
	// Definindo o papel e a orientação

	$dompdf->setPaper('A4', 'landscape');
	//renderizar o html
	$dompdf->render();
	
	//exibir a pagia
	$dompdf->stream("pagina.pdf",
		array( "Attachment"=> false //para realizar o download somente altera para true
		)
	);
	
	

?>