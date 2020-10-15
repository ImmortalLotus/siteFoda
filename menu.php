<?php 
session_start();
?>
<DOCTYPE HTML!>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Menu</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/layout.css">
        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
    </head>
    <body>
        <div id="principal">
			<div id="topo">
				<div id="logo">
					<h1> Portal de Notícias </h1>
					<h4> Desenvolvimento Web II</h4>
					<h4> Técnico em Informática</h4>
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
				 <?php
                      include "menu_local.php";
				 ?>

				</div>			
				
				
			</div>
			<?php
                include "rodape.php"
			?>
		</div>
    </body>
</html>
