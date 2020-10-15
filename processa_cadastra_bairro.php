
<?php 
 $conectar= mysqli_connect("localhost", "root","", "notebookstore");
  
  $bairro=$_POST["bairro"];
  
  

  
  	$sql_cadastrar="INSERT INTO bairro (bairro) 
    VALUES ('$bairro')";
     
  	if ($resultado_cadastrar==true){
  		echo "<script>
  		alert ('$nome cadastro com sucesso')
  		</script>";
  	}else{
  		echo "<script>
  		alert ('ocorreu um erro no servidor. tente de novo')
  		</script>";
  		echo "<script>
  		location.href= ('cadastra_bairro.php')
  		</script>";
  	}

  	}
  



 ?>