<!DOCTYPE html>
<html>
  <head>
    <title>Registration Page</title>
    <meta name="viewport" content= "width=device-width, initial-scale=1.0"> 
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="styles/bootstarp.css" />
    <script type="text/javascript" src="./js/register.js"></script>  
  </head>
  <body>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Registration Form</h1>
          </div>
          <div class="panel-body">
            <form action="signup.php" method="post">
            <!--<form  id="frm">-->
              <div class="form-group">
                <label for="firstName">First Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="firstName"
                  name="firstName"
                />
              </div>
              <div class="form-group">
                <label for="lastName">Last Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  name="lastName"
                />
              </div>
              <div class="form-group">
                <label for="gender">Gender</label>
                <div>
                  <label for="male" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="m"
                      id="male"
                    />Male</label
                  >
                  <label for="female" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="f"
                      id="female"
                    />Female</label
                  >
                  <label for="others" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="o"
                      id="others"
                    />Others</label
                  >
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                />
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                />
              </div>
              <div class="form-group">
                <label for="number">Phone Number</label>
                <input
                  type="number"
                  class="form-control"
                  id="number"
                  name="number"
                />
              </div>
              <input type="submit" id= "submit" class="btn btn-primary" />
            </form>
          </div>
          <div class="panel-footer text-right">
            <small></small>
          </div>
        </div>
      </div>
    </div>
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
</div>
  </body>
</html>
</html>