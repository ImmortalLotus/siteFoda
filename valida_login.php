<?php

if (isset($_SESSION["login"])){
	echo $_SESSION["login"];

}else{
	echo "<script>
	      alert ('Você não está conectado!')
	      </script>";
	      echo "<script>
	      location.href=('index.php')
	      </script>";
}
?> 