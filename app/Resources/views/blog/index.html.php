<!DOCTYPE html>
<html>
<head>
	<title> Bem vindo! </title>

	<style type="text/css"> 
	body {
    background-color: #2F4F4F 
	}
  	</style>
</head>
<body>

<form action="<?php echo $view['router']->path ('index') ?>" method="POST">
	<h1> <b> <u> Realize seu cadastro! </u> </b> </h1>
	<label> Digite seu nome: </label>
	<input type="text" name="nome"> <br> <br>
	<label>	Digite sua senha: </label>
	<input type="password" name="senha"> <br> <br>
	<input type="submit" name="enviar">
</form>

</body>
</html>