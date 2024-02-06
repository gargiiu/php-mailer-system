<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Welocome Page</title>
  </head>
  <body>
  <h2 class="text-center text-warning mt-5">Welocome
    <?php echo $_SESSION['username']; ?>
</h2>


<div class="container">
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $name = $_POST["fullname"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $to = "gargiugale2019@gmail.com";
    $headers = "From: $email"; // Corrected the header format
    if(mail($to, $subject, $message, $headers)) {
        echo "Email Sent";
    } else {
        echo "Email sending failed";
    }
}
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<input type="text" class="form-control mt-4" name="fullname" id="" placeholder="Full Name:">
<input type="email" class="form-control mt-4" name="email" id="" placeholder="Enter Email:">
<input type="text" class="form-control mt-4" name="subject" id="" placeholder="Enter Subject: ">
<textarea name="message" class="form-control mt-4" id="" cols="30" rows="10" placeholder="Enter Message:"></textarea>
<input type="submit" class="btn-primary mt-4" value="Send" name="submit">
</form>
</div>




 <div class="container">
    <a href="logout.php" class="btn btn-primary mt-5">Logout</a>
 </div>

  </body>
</html>

