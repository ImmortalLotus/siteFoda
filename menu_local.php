<?php if ($_SESSION["funcao"]=="admin"){?><div id="menu_local" class="menu_local">	
				  <div class="centralizar">
				     <h2>ADMINISTRAÇÃO</h2>				
					 <ul><li><a href="menu.php">Menu</a></li>
					 	 <li><a href="cadastra_notebook.php">Cadastrar notebooks</a></li>
					 	 <li><a href="cadastra_user.php">Cadastrar usuário</a></li>
					 	 <li><a href="altera_user.php">Alterar usuários</a></li>
					 	 <li><a href="cadastra_venda.php">Cadastrar venda</a></li>
					 	 <li><a href="altera_cancela_venda.php">Alterar/cancelar venda</a></li>
					 	 <li><a href="cadastra_marca.php">Cadastrar marca</a></li>
					 	 <li><a href="altera_cancela_venda.php">Alterar marca</a></li>
					 	 <li><a href="cadastra_modelo.php">Cadastrar modelo</a></li>
					 	 <li><a href="altera_cancela_venda.php">Alterar modelo</a></li>
					</ul>
				</div>
			</div>
			<?php }else if($_SESSION["funcao"]=="estoquista"){?>
				<div class="centralizar">
				    			
					 <ul><li><a href="menu.php">Menu</a></li>
					 	 <li><a href="cadastra_notebook.php">Cadastrar notebooks</a></li>
					 	 <li><a href="altera_notebook.php">Alterar/excluir notebooks</a></li>
					 	 </ul>
				</div>
			</div>
		<?php }else{?>
			<div class="centralizar">
             <ul><li><a href="administracao.php">Administração</a></li>
             	<li><a href="cadastro_noticia.php">Cadastrar vendas</a></li>
<li><a href="altera_cancela_venda.php">Alterar/cancelar vendas</a></li>
</ul>
				</div>
			</div>
			<?php }?>