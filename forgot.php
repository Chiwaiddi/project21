<?php 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>

<?php
$mode = "enter_email";
if(isset($_GET['mode'])){
    $mode=$_GET['mode'];

}
if(count($_POST) > 0){
    switch($mode){
        case'enter_email':

           break;
        case'enter_code':
           break;
        case'enter_password':
           break;

           default:
              break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <!-- customer link with css style -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">
     <?php
 switch($mode){
    case'enter_email':

       break;
    case'enter_code':
       break;
    case'enter_password':
       break;

       default:
          break;
}     ?>
    <form action="" method="post">
    <div class="header">
    <h2>Cafeteria Web Based Coupon Application System at DUCE</h2>
        </div>    
        <img  class="img-eye" src="index.jpeg" alt="my logo">
            <h4>Forgot Password</h4>
            <h5>Enter you email below</h5>
      
        <input type="email" name="email" required placeholder="Enter your Email">
        <input type="submit" name="submit" value="Next" class="form-btn">
       <div><a href="login_form.php">Login</a></div> 
    </form>

</div>
    
</body> 
</html>