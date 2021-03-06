<?php 
include_once("./database/constants.php");
if(isset($_SESSION["userid"])){
header("location:".DOMAIN."/dashbord.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>inventory management system</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="main.js" rel="stylesheet"></script>
    <link rel="stylesheet" href="./include/style.css">
    </head>
    
<body>
<div class="overlay"><div class="loader"></div></div>
<?php include_once("./template/header.php");?>
<br><br>
<div class="container">
<?php 
    if(isset($_GET["msg"]) AND !empty($_GET["msg"])){
?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
 <?php echo $_GET["msg"];?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php
      }  ?>
    <div class="card mx-auto" style="width: 20rem;">
    <img src="./images/computer-icons-user-login-desktop-wallpaper-others-thumbnail.jpg" style="width:60%;" class="card-img-top mx-auto" alt="...">
    <div class="card-body">
            <form id="formlogin" onSubmit="return false">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="log_email" name="log_email">
                <small id="e_error" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="log_password" name="log_password">
                    <small id="p_error" class="form-text text-muted"></small>

                </div>
            <button type="submit" class="btn btn-primary"><i class="fa fa-lock"></i> login</button>
                <span> <a href="register.php">Register</a></span>
            </form>   
            </div>
            <div class="card-footer"><a href="#">Forget Password ?</a></div>
    </div>
</div>
</body>
</html>
