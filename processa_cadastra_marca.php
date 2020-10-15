<?php 
 $conectar= mysqli_connect("localhost", "root","", "notebookstore");
  
  $marca=$_POST["marca"];
  
  

  
  	$sql_cadastrar="INSERT INTO marcas (nome_marca) 
    VALUES ('$marca')";
     
  	if ($resultado_cadastrar==true){
  		echo "<script>
  		alert ('$nome cadastro com sucesso')
  		</script>";
  	}else{
  		echo "<script>
  		alert ('ocorreu um erro no servidor. tente de novo')
  		</script>";
  		echo "<script>
  		location.href= ('cadastra_marca.php')
  		</script>";
  	}

  	}
  



 ?>