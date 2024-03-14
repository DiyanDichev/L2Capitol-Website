<?php require_once('configs/config.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="pt-br" />

<title><?php print SERVER_NAME; ?>- Change Password</title>

<link href="css/style.css" type="text/css" rel="stylesheet" />

<script type="text/javascript" src="js/jquery-1.5.js"></script>
<script type="text/javascript" src="js/jquery.validity.js"></script>
<script type="text/javascript" src="js/validacoesExtras.js"></script>
<script type="text/javascript" src="js/validacaoTrocarSenha.js"></script>
<script type="text/javascript" src="js/trocarSenha.js"></script>
<link rel="stylesheet" href="css/navbar.css">
</head>

<body><div id="menu_holder"><div class="wrapper">
	
		<!-- BEGIN Dark navigation bar -->
		<nav class="dark">
			<ul class="clear">
				<li><a href="../index.php">Back to site</a></li>
				<li><a href="cadastro.php">Create Account</a></li>
				<li><a href="destravarchar.php">Unlock Char</a>
				<li><a href="trocarsenha.php">Change Password</a>
					
			</ul>
		</nav>
		<!-- END Dark navigation bar -->
		
	</div></div><div id="all">
<h2>CHANGE PASSWORD</h2>
<div id="msg"></div>
<form name="trocarSenha" id="trocarSenha" method="post" action="functions/trocarsenha.php">
	<fieldset>
    	<label for="login">Login:</label>
        <input type="text" name="login" id="login" class="formInput" value="" />
        
        <label for="senhaantiga">Old Password:</label>
        <input type="password" name="senhaantiga" id="senhaantiga" class="formInput" value="" />
        
        <label for="senhanova">New Password:</label>
        <input type="password" name="senhanova" id="senhanova" class="formInput" value="" />
        
        <label for="resenha">Re-New Password:</label>
        <input type="password" name="resenha" id="resenha" class="formInput" value="" />
		
		<input type="hidden" name="funcao" value="trocarsenha" />
        <center>
        <input type="submit" name="trocarSenhaSubmit" id="trocarSenhaSubmit" class="formInput submit" value="CHANGE" /></center>
    </fieldset>
</form></div>
</body>

</html>