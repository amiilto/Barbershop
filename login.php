<?php
session_start();
if(isset($_SESSION['username'])){
    header('location: sales.php');
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" tyle="text/css" href="Assets/style.css">
    </head>
    <body>
        <div class="loginarea">
            <img class="logo_img" src="Assets/barbershop.png">
        	<form method="POST" class="form" action="validation.php">
        		<input type="text" name="username" placeholder="Usuário" class="form_input"/>
                <input type="password" name="password" placeholder="Senha" class="form_input"/>
        		<input type="submit" value="Entrar" class="form_input_submit"/><br/>
        	</form>
        </div>
    </body>
</html>