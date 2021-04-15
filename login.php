<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>PPP Loan</title>
</head>
<body>

  <?php
  require 'nav_top.php';
  ?>
  
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 bg-white p-4 rounded mt-5">
        <h1>Welcome Back!</h1>
        <center>
          <p>Continue Where You Left Off.</p>
        </center>
        <form action="dashboard.php" method="post">
          <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" class="form-control" required>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" class="form-control" required>
            <button type="submit" class="
    btn btn-primary btn-lg">Login</button>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
            <br>
          </div>
          <div class="container forgot" style="background-color:#f1f1f1">
            <button type="button" class="btn btn-default btn-lg">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
          </div>
        </form>
        <p class="forms-service-agreement-acceptan"></p>
        <br>
      </div>
    </div>
  </div>
  <?php include 'footer.php'; ?>

  </body>
</html>