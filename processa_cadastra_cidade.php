<?php 
 $conectar= mysqli_connect("localhost", "root","", "notebookstore");
  
  $cidade=$_POST["cidade"];
  
  

  
  	$sql_cadastrar="INSERT INTO cidade (cidade) 
    VALUES ('$cidade')";
     
  	if ($resultado_cadastrar==true) {
  		echo "<script>
  		alert ('$nome cadastro com sucesso')
  		</script>";
  	}else{
  		echo "<script>
  		alert ('ocorreu um erro no servidor. tente de novo')
  		</script>";
  		echo "<script>
  		location.href= ('cadastra_cidade.php')
  		</script>";
  	}

  	}
  



 ?>