<?php

  // Check If Come From Request
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Assign Variable
    $user = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $massage = filter_var($_POST["massage"], FILTER_SANITIZE_STRING);

    // Array Of Errors
    $formErrors = array();
    $errorCount = 0;

    if (strlen($user) < 3) {
      $formErrors[] = "Username Must Be Larger Than 3 Characters.";
      $errorCount++;
    }
    if (strlen($massage) < 10) {
      $formErrors[] = "Massage Can't Be Less Than 10 Characters.";
      $errorCount++;
    }

    // Send Email
    if ($errorCount === 0) {
      $header = "From: " . $email . "\n";
      $myEmail = "t@t.com";
      $subject = "Contact Form";
      mail($myEmail, $subject, $massage, $header);
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Vigo Contact Form</title>
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/contact.css">
  </head>

  

  <body>
    <div class="container">
      <h1 class="text-center mt-3">Contact Me</h1>
      <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
          if ($errorCount > 0) {
        ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <?php
            if (isset($formErrors)) {
              foreach ($formErrors as $error) {
                echo "- " .  $error . "<br>";
              }
            }
          ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?php
          } else if ($errorCount === 0) {
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            Success, Send Successfuly
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php
          } 
        }
        ?>



        <div class="mb-3">
          <!-- <label for="usernameInbut">Username</label> -->
          <input class="form-control"  type="text" name="username" placeholder="Your Username" value="<?php if (isset($errorCount) && $errorCount > 0)echo $user ?>"  required>
        </div>

        <div class="mb-3">
          <!-- <label for="emailInbut">Email</label> -->
          <input class="form-control"  type="email" name="email" placeholder="Your Email" value="<?php if (isset($errorCount) && $errorCount > 0)echo $email ?>"  aria-describedby="emailHelp" required>
          <div id="emailHelp" class="form-text remember">We'll never share your email with anyone else.</div>
        </div>

        
        <div class="mb-3">
          <!-- <label for="massageInbut">Your Massage</label> -->
          <textarea class="form-control"  name="massage" placeholder="Your Massage" required><?php if (isset($errorCount) && $errorCount > 0)echo $massage ?></textarea>
        </div>

        <div class="mb-3">
          <input class="btn btn-dark" type="submit" value="Send Massage">
        </div>

      </form>
    </div>
    <script src="js/jQuery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
  </body>

</html>