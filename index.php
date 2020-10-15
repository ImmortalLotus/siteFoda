<?php
session_start();?>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Index</title>
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
				
			</div>
			<div id="conteudo_especifico">
				
				<div class="div_central">					
					<div class="centralizar">
                        <h2>LOGIN</h2>
                        <form method="post" action="processa_index.php">
                        <p>Login: <br><input type="text" name="login" required></p>
					    <p>Senha: <br><input type="password" name="senha" required></p>
					    <p><input type="submit" value="Entrar"></p>
</form>
					</div>
				</div>			
				
			</div>
			<?php 
			include "rodape.php";
			?>
		</div>
    </body>
</html>
