<?php 
session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cadastra marca</title>
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
                    <h2>Cadastro de marcas</h2>
				</div>
				</div>			
				
				<div class="div_esquerda">
					<?php include "menu_local.php";?>
				</div>				
				<div class="div_direita">
					<form method="post" action="processa_cadastra_marca.php" enctype="multipart/form-data">
					<table class="centralizar">
					<tr>	
					<td>
				     <p> marca:</p></td>
				     <td> <p><input type="text" name="marca" required></p></td></tr>
				     
							<td></td></tr></table><input type="submit" value="Cadastrar"></form>
						

				</div> 
			</div>
			<?php
			  include "rodape.php"?>
		</div>
    </body>
</html>
