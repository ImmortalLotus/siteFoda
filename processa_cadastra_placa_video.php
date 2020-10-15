<?php 
 $conectar= mysqli_connect("localhost", "root","", "notebookstore");
  
  $placa_video=$_POST["placa_video"];
  
  

  
  	$sql_cadastrar="INSERT INTO placa_video (placa_video) 
    VALUES ('$placa_video')";
     
  	if ($resultado_cadastrar==true){
  		echo "<script>
  		alert ('$nome cadastro com sucesso')
  		</script>";
  	}else{
  		echo "<script>
  		alert ('ocorreu um erro no servidor. tente de novo')
  		</script>";
  		echo "<script>
  		location.href= ('cadastra_placa_video.php')
  		</script>";
  	}

  	}
  



 ?>