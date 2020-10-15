<?php 
session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cadastra Usuário</title>
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
                    <h2>Cadastro de usuários</h2>
				</div>
				</div>			
				
				<div class="div_esquerda">
					<?php include "menu_local.php";?>
				</div>				
				<div class="div_direita">
					<form method="post" action="processa_cadastra_user.php" enctype="multipart/form-data">
					<table class="centralizar">
					<tr>	
					<td>
				     <p> Nome:</p></td>
				     <td> <p><input type="text" name="nome" required></p></td></tr>
				     <tr>
						<td><p>Função:</p></td>
						  <td><p><input type="radio" name="funcao" value="vendedor">Vendedor:<input type="radio" name="perfil" value="estoquista">Estoquista  </p></td>
						</tr>
						<tr>
							<td>
								<p>Login:</p>
							</td>
							<td>
								<p><input type="text" name="login" required></p>
							</td></tr>
							<tr>
							<td>
								<p>Senha</p>
							</td>
							<td>
								<p><input type="password" name="senha" required></p>
							</td>
						</tr>
						<tr>
							<td><p>RG: </p></td>
								<td><p><input type="text" name="rg" required></p></td></tr>
							<tr>
							<tr>
							<td><p>Idade: </p></td>
								<td><p><input type="text" name="idade" required></p></td></tr>
							<tr>	
							<tr>
							<td><p>E-mail: </p></td>
								<td><p><input type="text" name="email" required></p></td></tr>
							<tr>
								<tr>
							<td><p>Telefone Pessoal: </p></td>
								<td><p><input type="text" name="telefone_pessoal" required></p></td></tr>
							<tr>
							<tr>
							<td><p>Salário: </p></td>
								<td><p><input type="text" name="salario" required></p></td></tr>
							<tr>
							<tr>
							<td><p>Contato emergencial 1: </p></td>
								<td><p><input type="text" name="contato_emergencia1" required></p></td></tr>
							<tr>
							<td><p>Contato emergencial 2: </p></td>
								<td><p><input type="text" name="contato_emergencia2" required></p></td></tr>
							<tr>
							<?php
                              $conectar= mysqli_connect("localhost", "root","","notebookstore");
                              $sql_consulta= "SELECT cidade FROM endereco";
                              $resultado_consulta=mysqli_query($conectar, $sql_consulta);
							?>
							<td><p>Cidade: </p></td>
								<td><p><select id ="cidade" name="cidade">
                                    <?php 
                                     while($registro=mysqli_fetch_row($resultado_consulta)){?>
                                      <option value=<?php echo"$registro[0]";?>><?php echo "$registro[0]";?></option>
                                      <?php
                                     }?></select>




									<a href="cadastra_cidade.php">Cidade nova? Clique Aqui!</a></p></td></tr>
							<tr>	
							<td><p>Estado: </p></td>
								<td><p><select id="estado" name="estado">
									<option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                    <option value="EX">Estrangeiro</option>
                                    </select></p></td></tr>
    
							<tr>
								<?php 
								$sql_consulta2= "SELECT bairro FROM endereco";
                                $resultado_consulta2=mysqli_query($conectar, $sql_consulta2);
                                ?>
							<td><p>Bairro: </p></td>
								<td><p><select id ="bairro" name="bairro">
                                    <?php 
                                     while($registro1=mysqli_fetch_row($resultado_consulta2)){?>
                                      <option value=<?php echo"$registro1[0]";?>><?php echo "$registro1[0]";?></option>
                                      <?php
                                     }?></select><a href="cadastra_bairro.php">Bairro novo? Clique Aqui!</a>
</p></td></tr>
							
							<tr>
                                <?php 
								$sql_consulta3= "SELECT CEP FROM endereco";
                                $resultado_consulta3=mysqli_query($conectar, $sql_consulta3);
                                ?>
							<td><p>CEP: </p></td>
								<td><p><select id ="cep" name="cep">
                                    <?php 
                                     while($registro1=mysqli_fetch_row($resultado_consulta3)){?>
                                      <option value=<?php echo"$registro1[0]";?>><?php echo "$registro1[0]";?></option>
                                      <?php

                                     }?></select><a href="cadastra_cep.php">CEP novo? Clique Aqui!</a></p></td></tr>
                                     <tr>
							<td><p>Rua: </p></td>
								<td><p><input type="text" name="rua" required></p></td></tr>
							<tr>
							<td><p>Número: </p></td>
								<td><p><input type="text" name="numero" required></p></td></tr>
							<tr>
							<td></td></tr></table><input type="submit" value="Cadastrar"></form>
						

				</div> 
			</div>
			<?php
			  include "rodape.php"?>
		</div>
    </body>
</html>
