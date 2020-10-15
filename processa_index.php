<?php
  session_start();

  $conectar= mysqli_connect("localhost", "root","", "notebookstore");
  
  $login=$_POST["login"];
  $senha=$_POST["senha"];

  $sql_consulta = "SELECT  cod_funcionario,login, senha, funcao 
                      FROM funcionario
                      WHERE 
                           login= '$login'
                           AND 
                           senha= '$senha'";

  $resultado_consulta = mysqli_query($conectar, $sql_consulta);

  $linhas = mysqli_num_rows ($resultado_consulta);

  if ($linhas == 1){
  	$_SESSION["login"]=$login;
    $registro= mysqli_fetch_row ($resultado_consulta);
    $_SESSION["funcao"]=$registro[3];
    $_SESSION["cod_funcionario"]=$registro[0];
    echo "<script>
  	             location.href= ('menu.php')
  	             </script>";
  }else{

  	echo "<script>
  	           alert ('Login ou senha incorretos! Digite Novamente!!')
  	       </script>";
  	       echo "<script> location.href = ('index.php') </script>";
  }
  ?>