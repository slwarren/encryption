<?php include('server.php') ?>

<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" href="style.css">
</head>


<body>
  <div class="header">
  	<h2>Login</h2>
  	    <ul>
        <li><a href="home.html">Home</a></li>
        <li><a href="encryption.html">Encryption</a></li>



        </ul>
  	
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>

  </form>
  
  
</body>
</html>