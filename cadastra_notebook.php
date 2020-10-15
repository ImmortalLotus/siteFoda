<?php 
session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cadastra Notebook</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/layout.css">
        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
    </head>
    <body>
        <div id="principal">
			<div id="topo">
				<div id="logo">
					<h1> NoteBook Store </h1>
				</div>
				<div id="menu_global"  class="menu_global">
					<ul>
                        <li>Olá <?php include "valida_login.php";?> </a></li>
                        <li><a href="logout.php">Sair</a></li>                        
                    </ul>                
				</div>
			</div>
			<div id="conteudo_especifico">
				
				<div class="div_central">					
				<div class="centralizar">
                    <h2>Cadastro de notebooks</h2>
				</div>
				</div>			
				
				<div class="div_esquerda">
					<?php include "menu_local.php";?>
				</div>				
				<div class="div_direita">
					<form method="post" action="processa_cadastra_notebook.php" enctype="multipart/form-data">
					<table class="centralizar">
					<tr> 
          <td>
             <p> Preço:</p></td>
             <td> <p><input type="text" name="preco" required></p></td></tr>
             
              <td></td></tr>
							<tr>
							<?php
                              $conectar= mysqli_connect("localhost", "root","","notebookstore");
                              $sql_consulta= "SELECT processador FROM notebook";
                              $resultado_consulta=mysqli_query($conectar, $sql_consulta);
							?>
							<td><p>Processador: </p></td>
								<td><p><select id ="processador" name="processador">
                                    <?php 
                                     while($registro=mysqli_fetch_row($resultado_consulta)){?>
                                      <option value=<?php echo"$registro[0]";?>><?php echo "$registro[0]";?></option>
                                      <?php
                                     }?></select>




									<a href="cadastra_processador.php">Processador novo? Clique Aqui!</a></p></td></tr>
							
    
							<tr>
								<?php 
								$sql_consulta2= "SELECT memoria FROM notebook";
                                $resultado_consulta2=mysqli_query($conectar, $sql_consulta2);
                                ?>
							<td><p>Memória: </p></td>
								<td><p><select id ="memoria" name="memoria">
                                    <?php 
                                     while($registro2=mysqli_fetch_row($resultado_consulta2)){?>
                                      <option value=<?php echo"$registro2[0]";?>><?php echo "$registro2[0]";?></option>
                                      <?php
                                     }?></select>
</select><a href="cadastra_memoria.php">Memória nova? Clique Aqui!</a></p></td></tr>
							
							<tr>
                                <?php 
								$sql_consulta3= "SELECT memoria_ram FROM notebook";
                                $resultado_consulta3=mysqli_query($conectar, $sql_consulta3);
                                ?>
							<td><p>Memória RAM: </p></td>
								<td><p><select id ="memoria_ram" name="memoria_ram">
                                    <?php 
                                     while($registro3=mysqli_fetch_row($resultado_consulta3)){?>
                                      <option value=<?php echo"$registro3[0]";?>><?php echo "$registro3[0]";?></option>
                                      <?php

                                     }?></select><a href="cadastra_memoria_ram.php">Memória RAM nova? Clique Aqui!</a></p></td></tr>
                                     <tr>
                                <?php 
								$sql_consulta4= "SELECT placa_video FROM notebook";
                                $resultado_consulta4=mysqli_query($conectar, $sql_consulta4);
                                ?>
							<td><p>Placa de vídeo: </p></td>
								<td><p><select id ="placa_video" name="placa_video">
                                    <?php 
                                     while($registro4=mysqli_fetch_row($resultado_consulta4)){?>
                                      <option value=<?php echo"$registro4[0]";?>><?php echo "$registro4[0]";?></option>
                                      <?php

                                     }?></select><a href="cadastra_placa_video.php">Placa de vídeo nova? Clique Aqui!</a></p></td></tr>
                                     <tr>
                                <?php 
								$sql_consulta5= "SELECT modelos FROM notebook";
                                $resultado_consulta5=mysqli_query($conectar, $sql_consulta5);
                                ?>
							<td><p>Modelo: </p></td>
								<td><p><select id ="modelos" name="modelos">
                                    <?php 
                                     while($registro5=mysqli_fetch_row($resultado_consulta5)){?>
                                      <option value=<?php echo"$registro5[0]";?>><?php echo "$registro5[0]";?></option>
                                      <?php

                                     }?></select><a href="cadastra_modelo.php">Modelo novo? Clique Aqui!</a></p></td></tr>
							<tr>
                                <?php 
								$sql_consulta6= "SELECT nome_marca FROM marcas";
                                $resultado_consulta6=mysqli_query($conectar, $sql_consulta6);
                                ?>
							<td><p>Marca </p></td>
								<td><p><select id ="marca" name="marca">
                                    <?php 
                                     while($registro6=mysqli_fetch_row($resultado_consulta6)){?>
                                      <option value=<?php echo"$registro6[0]";?>><?php echo "$registro6[0]";?></option>
                                      <?php

                                     }?></select><a href="cadastra_memoria_ram.php">Marca nova? Clique Aqui!</a></p></td></tr>
							<tr>
							<td></td></tr></table><input type="submit" value="Cadastrar"></form>
						

				</div> 
			</div>
			<?php
			  include "rodape.php"?>
		</div>
    </body>
</html>
