<?php 
session_start(); 
$name2=$_SESSION["sname"];
$email=$_SESSION["semail"];
?>

<?php header('Refresh: 5; URL=index.php'); ?>

<!DOCTYPE html>
<html>
    <head>
       
    
    </head>
    
    <bod>
        <div class="boxx">
        <center>
        <h1>Thank You For Your Registration <?php echo $name2;?> </h1>
        <h1>Your Email is: <u> <?php echo $email; ?></u>  is your  Login Id</h1>
        <h3>Now You Can Log in with your ID And Password</h3>
        <h2>You will be automatically redirected to the login Page</h2></center>
        </div>
            
<?php session_destroy();  ?>
    
    </body>
    </html>
    <style>
body{
  background: url("7.jpeg");
  background-size: cover;
  font-family: "Times New Roman", Times, serif;
}

.boxx{
  margin-top:200px;
  box-shadow:0px 0px 15px black;
  border-radius:12px;
  background-color:#E2E2DD;
  opacity: .7;
}
  </style>

