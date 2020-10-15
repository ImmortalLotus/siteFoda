
<?php 
 $conectar= mysqli_connect("localhost", "root","", "notebookstore");
  
  $cep=$_POST["cep"];
  
  

  
  	$sql_cadastrar="INSERT INTO cep (cep) 
    VALUES ('$cep')";
     
  	if ($resultado_cadastrar==true){
  		echo "<script>
  		alert ('$nome cadastro com sucesso')
  		</script>";
  	}else{
  		echo "<script>
  		alert ('ocorreu um erro no servidor. tente de novo')
  		</script>";
  		echo "<script>
  		location.href= ('cadastra_cep.php')
  		</script>";
  	}

  	}
  



 ?>