
<?php 
 $conectar= mysqli_connect("localhost", "root","", "notebookstore");
  
  $estado=$_POST["estado"];
  
  

  
  	$sql_cadastrar="INSERT INTO estado (estado) 
    VALUES ('$estado')";
     
  	if ($resultado_cadastrar==true){
  		echo "<script>
  		alert ('$nome cadastro com sucesso')
  		</script>";
  	}else{
  		echo "<script>
  		alert ('ocorreu um erro no servidor. tente de novo')
  		</script>";
  		echo "<script>
  		location.href= ('cadastra_estado.php')
  		</script>";
  	}

  	}
  



 ?>