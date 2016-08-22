
<!DOCTYPE html>
<html lang="en">
  <head>
  	<?php include('config/css.php'); include('config/js.php'); include ('config/setup.php');?>
  	<title>Welcome <?php echo $users_name; ?> </title>
    <meta charset="utf-8">
        

<link href="signin.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Please Register Here</h2>
        <label for="inputEmail" class="sr-only">UserName</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="UserName" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
