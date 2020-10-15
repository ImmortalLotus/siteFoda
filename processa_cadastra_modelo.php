<?php 
 $conectar= mysqli_connect("localhost", "root","", "notebookstore");
  
  $modelos=$_POST["modelos"];
  
  

  
  	$sql_cadastrar="INSERT INTO modelos (modelos) 
    VALUES ('$modelos')";
     
  	if ($resultado_cadastrar==true) {
  		echo "<script>
  		alert ('$nome cadastro com sucesso')
  		</script>";
  	}else{
  		echo "<script>
  		alert ('ocorreu um erro no servidor. tente de novo')
  		</script>";
  		echo "<script>
  		location.href= ('cadastra_modelo.php')
  		</script>";
  	}

  	}
  



 ?>