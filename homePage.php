<?php 
session_start();

if (isset($_SESSION['name']))/*(isset($_SESSION['name'])*/ {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
     <meta name="viewport" content= "width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" type="text/css" href="./styles/style.css">
</head>
<body>
     <img src="happy.svg" class="" alt="My Happy SVG" style="margin-top: 100px; height: 100px;" />
     <h1>Hello <?php echo $_SESSION['name']; ?></h1>
     <h1>Your mail-id: <?php echo $_SESSION['email']; ?></h1>
     <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" data-role="update">Update</button>
     <a href="logout.php">Logout</a>
     <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <form action="update.php" method="post" id="frm">
			 <!--<form  id="frm">-->
				<div class="form-group">
				  <label for="firstName">firstName</label>
				  <input
					type="text"
					class="form-control"
					id="firstName"
					name="firstName"
          value="<?= $_SESSION['firstName'] ?>"
					placeholder="User Name">
				</div>
        <div class="form-group">
				  <label for="lastName">last Name</label>
				  <input
					type="text"
					class="form-control"
					id="lastName"
					name="lastName"
          value="<?= $_SESSION['lastName'] ?>"
					placeholder="User Name">
				</div>
				<div class="form-group">
				  <label for="password">Password</label>
				  <input
					type="password"
					class="form-control"
					id="password"
					name="password"
          value="<?= $_SESSION['password'] ?>"
					placeholder="Password"
				  />
				</div>
				<input type="submit" id="submit" class="btn btn-primary"/>
				<!--<input type="submit" id="submit" class="btn btn-primary" />-->
			  </form>
      <div class="modal-footer">
     <!-- <a href="#" id ="save" class="btn btn-primary pull-right">Update></a>-->
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</body>
<script>
$(document).ready(function(){
     $("#MyModal").hide();
     alert($_SESSION['name'])
     /*$(document).on("click", 'a[data-role=update]', function(){
           //const id = isset($_SESSION['id']
           const firstName = isset($_SESSION['firstname'])
           const lastName = isset($_SESSION['lastname'])
           const email = isset($_SESSION['email'])

           $('#fastName').val(fastName)
           $('#lastName').val(lastName)
           $('#email').val(email)
           $('#mymodal').modal('toggle')
     });*/
                //const id = isset($_SESSION['id']
           const firstName = isset($_SESSION['name'])
           const lastName = isset($_SESSION['lastname'])
           const password = isset($_SESSION['password'])
    
           $('#firsttName').val(firstName)
           $('#lastName').val(lastName)
           $('#password').val(password)
           $('#mymodal').modal('toggle')

     /*$('#submit').click(function(){
          const id = isset($_SESSION['id'];
           const firstName = $('#fastName').val()
           const lastName = $('#lastName').val()
           const email = $('#email').val()
           alert({$firstName, lastName, email, id})
           $ajax({
			url:"./php/update.php",
			type: "post",
			data:{$firstName, lastName, email, id},
			success:function(d){
				console.log(d)
        
			}*/	$("#submit").click(function(){
		//alert("login")
    const email = isset($_SESSION['email'])
		$ajax({
			url:"update.php",
			type: "post",
			data:$("#frm").serialize(),
			success:function(d){
			
			}
		})
	})


		})
     })
});
</script>
</html>
//
<?php 
}else{
     header("Location: loginPage.php");
     exit();
}
 ?>