<?php 
 $conectar= mysqli_connect("localhost", "root","", "notebookstore");
  $login=$_POST["login"];
  $senha=$_POST["senha"];
  $nome=$_POST["nome"];
  $funcao=$_POST["funcao"];
  $rg=$_POST["rg"];
  $idade=$_POST["idade"];
  $email=$_POST["email"];
  $telefone_pessoal=$_POST["telefone_pessoal"];
  $salario=$_POST["salario"];
  $contato_emergencial1=$_POST["contato_emergencia1"];
  $contato_emergencial2=$_POST["contato_emergencia2"];
  $cidade=$_POST["cidade"];
  $estado=$_POST["estado"];
  $bairro=$_POST["bairro"];
  $numero=$_POST["numero"];
  $rua=$_POST["rua"];
  $cep=$_POST["cep"];
  

  $sql_consulta2= "SELECT cod_cidade FROM cidade
                  WHERE cidade= '$cidade'";
  $resultado_consulta2 = mysqli_query($conectar, $sql_consulta2);

  $registro2= mysqli_fetch_row($resultado_consulta2);




$sql_consulta4= "SELECT cod_bairro FROM bairro
                  WHERE bairro= '$bairro'";
  $resultado_consulta4 = mysqli_query($conectar, $sql_consulta4);

  $registro4= mysqli_fetch_row($resultado_consulta4);

$sql_consulta5= "SELECT cod_cep FROM cep
                  WHERE cep= '$cep'";
  $resultado_consulta5 = mysqli_query($conectar, $sql_consulta5);

  $registro5= mysqli_fetch_row($resultado_consulta5);



  $sql_consulta= "SELECT login FROM funcionario
                  WHERE login= '$login'";
  $resultado_consulta = mysqli_query($conectar, $sql_consulta);

  $linhas= mysqli_num_rows ($resultado_consulta);
  if ($linhas==1){
  	echo "<script>
  	        alert ('login já cadastrado. tente novamente')
  	        </script>";
  	        echo "<script> 
  	        location.href =('cadastra_user.php')
  	        </script>";
  }else{
  	$sql_cadastrar="INSERT INTO funcionario ( endereco_cod_endereco, nome, funcao, login, senha, RG,idade,email,telefone_pessoal,contato_emergencia1, contato_emergencia2,salario) 
    SELECT o.endereco_cod_endereco , o.'$nome',o.'$funcao', o.'$login', o.'$senha', o.'$rg',o.'$idade',o.'$email',o.'$telefone_pessoal',o.'$contato_emergencia1',o.'$contato_emergencia2',o.'$salario' FROM endereco en INNER JOIN funcionario o  ON  o.cod_funcionario = en.cod_endereco";
     $sql_cadastrar2="INSERT INTO endereco (idcidade,estado,idbairro,rua,idcep,numero)
     VALUES('$registro2[0]','$estado','$registro4[0]','$rua','$registro5[0]','$numero')";
  	$resultado_cadastrar= mysqli_query($conectar, $sql_cadastrar);
    $resultado_cadastrar2= mysqli_query($conectar, $sql_cadastrar2);
  	if ($resultado_cadastrar==true) and ($resultado_cadastrar2==true){
  		echo "<script>
  		alert ('$nome cadastro com sucesso')
  		</script>";
  	}else{
  		echo "<script>
  		alert ('ocorreu um erro no servidor. tente de novo')
  		</script>";
  		echo "<script>
  		location.href= ('cadastra_user.php')
  		</script>";
  	}

  	}
  



 ?>