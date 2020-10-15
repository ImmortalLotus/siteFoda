<?php 
 $conectar= mysqli_connect("localhost", "root","", "notebookstore");
  $processador=$_POST["processador"];
  $memoria=$_POST["memoria"];
  $memoria_ram=$_POST["memoria_ram"];
  $placa_video=$_POST["placa_video"];
  $modelos=$_POST["modelos"];
  $marca=$_POST["marca"];  
  $preco=$_POST["preco"];
  
  $sql_consulta2= "SELECT cod_processador FROM processador
                  WHERE processador= '$processador'";
  $resultado_consulta2 = mysqli_query($conectar, $sql_consulta2);

  $registro2= mysqli_fetch_row($resultado_consulta2);



  $sql_consulta3= "SELECT cod_memoria FROM memoria
                  WHERE memoria= '$memoria'";
  $resultado_consulta3 = mysqli_query($conectar, $sql_consulta3);

  $registro3= mysqli_fetch_row($resultado_consulta3);

$sql_consulta4= "SELECT cod_memoria_ram FROM memoria_ram
                  WHERE memoria_ram= '$memoria_ram'";
  $resultado_consulta4 = mysqli_query($conectar, $sql_consulta4);

  $registro4= mysqli_fetch_row($resultado_consulta4);

$sql_consulta5= "SELECT cod_placa_video FROM placa_video
                  WHERE placa_video= '$placa_video'";
  $resultado_consulta5 = mysqli_query($conectar, $sql_consulta5);

  $registro5= mysqli_fetch_row($resultado_consulta5);

$sql_consulta6= "SELECT cod_modelos FROM modelos
                  WHERE modelos= '$modelos'";
  $resultado_consulta6 = mysqli_query($conectar, $sql_consulta6);

  $registro6= mysqli_fetch_row($resultado_consulta6);


  $sql_consulta= "SELECT cod_marca FROM marcas
                  WHERE nome_marca= '$marca'";
  $resultado_consulta = mysqli_query($conectar, $sql_consulta);

  $registro= mysqli_fetch_row($resultado_consulta);
  
  	$sql_cadastrar= "INSERT INTO notebook (preco, idprocessador,idmemoria,idmemoria_ram, idplaca_video,idmodelos,marcas_cod_marca)
  	VALUES ('$preco','$registro2[0]', '$registro3[0]', '$registro4[0]', '$registro5[0]','$registro6[0]','$registro[0]')";
  	$resultado_cadastrar= mysqli_query($conectar, $sql_cadastrar);
  	if ($resultado_cadastrar==true){
  		echo "<script>
  		alert ('$nome cadastro com sucesso')
  		</script>";
  	}else{
  		echo "<script>
  		alert ('ocorreu um erro no servidor. tente de novo')
  		</script>";
  		echo "<script>
  		location.href= ('cadastra_notebook.php')
  		</script>";
  	}

  	
  



 ?>