<?php 
 $conectar= mysqli_connect("localhost", "root","", "notebookstore");
  
  $processador=$_POST["processador"];
  
  

  
  	$sql_cadastrar="INSERT INTO processador (processador) 
    VALUES ('$processador')";
     
  	if ($resultado_cadastrar==true) {
  		echo "<script>
  		alert ('$nome cadastro com sucesso')
  		</script>";
  	}else{
  		echo "<script>
  		alert ('ocorreu um erro no servidor. tente de novo')
  		</script>";
  		echo "<script>
  		location.href= ('cadastra_processador.php')
  		</script>";
  	}

  	}
  



 ?>