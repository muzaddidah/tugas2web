<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TUGAS 2 | Website LANJUTAN</title>
	<link rel="stylesheet" href="<?php echo AST; ?>/css/style.css">
</head>
<body id="bg-login">
    <div class="box-login">
        <h2>LOGIN</h2>
        <form action="<?php echo URL; ?>/Dashboard/index" method="POST">
        <input type="text" name="user" placeholder="Username" class="input-login">
        <input type="password" name="pass" placeholder="Password" class="input-login">
        <input type="submit" name="login" value="Login" class="button-login">
        </form>
    </div>
</body>
</html>