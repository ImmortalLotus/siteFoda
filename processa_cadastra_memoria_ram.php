<?php 
 $conectar= mysqli_connect("localhost", "root","", "notebookstore");
  
  $memoria_ram=$_POST["memoria_ram"];
  
  

  
  	$sql_cadastrar="INSERT INTO memoria_ram (memoria_ram) 
    VALUES ('$memoria_ram')";
     
  	if ($resultado_cadastrar==true) {
  		echo "<script>
  		alert ('$nome cadastro com sucesso')
  		</script>";
  	}else{
  		echo "<script>
  		alert ('ocorreu um erro no servidor. tente de novo')
  		</script>";
  		echo "<script>
  		location.href= ('cadastra_memoria_ram.php')
  		</script>";
  	}

  	}
  



 ?>