<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<meta name="viewport" content= "width=device-width, initial-scale=1.0"> 
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/styles/style.css">
	<link rel="stylesheet" type="text/css" href="/styles/bootstarp.css">
</head>
<body>
     <!--<form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
     </form>-->

	 <div class="container">
		<div class="row col-md-6 col-md-offset-3">
		  <div class="panel panel-primary">
			<div class="panel-heading text-center">
			  <h1>Login Form</h1>
			</div>
			<div class="panel-body">
			  <form action="login.php" method="post" id="frm">
				<div class="form-group">
				  <label for="firstName">User Name</label>
				  <input
					type="text"
					class="form-control"
					id="firstName"
					name="uname"
					placeholder="User Name">
				</div>
				<div class="form-group">
				  <label for="password">Password</label>
				  <input
					type="password"
					class="form-control"
					id="password"
					name="password"
					placeholder="Password"
				  />
				</div>
				<input type="submit" id="submit" class="btn btn-primary" />
			  </form>
			</div>
			<div class="panel-footer text-right">

			</div>
		  </div>
		</div>
	  </div>
</body>
<script>
	$(document).ready(function(){
		$("#submit").click(function(){
			//alert('chjkcndcnjc')
			$ajax({
				url:"login.php",
				type: "post",
				data:$("#frm").serialize(),
				success:function(d){
					 alert(d)
				}
			})
		})
	})
</script>
</html>