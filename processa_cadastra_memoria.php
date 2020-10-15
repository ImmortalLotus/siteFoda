<?php 
 $conectar= mysqli_connect("localhost", "root","", "notebookstore");
  
  $memoria=$_POST["memoria"];
  
  

  
  	$sql_cadastrar="INSERT INTO memoria (memoria) 
    VALUES ('$memoria')";
     
  	if ($resultado_cadastrar==true){
  		echo "<script>
  		alert ('$nome cadastro com sucesso')
  		</script>";
  	}else{
  		echo "<script>
  		alert ('ocorreu um erro no servidor. tente de novo')
  		</script>";
  		echo "<script>
  		location.href= ('cadastra_memoria.php')
  		</script>";
  	}

  	}
  



 ?>