<?php 
  // Check If User Come From A Request
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Assign Variables
    $user = $_POST['username'];
    $email = $_POST['email'];
    $mas = $_POST['massage'];

    //Creating Array Of Errors
    $formErrors = array();

    if(strlen($user) < 3) {
      $formErrors[] = 'User Name Can\'t Be Less Than <strong>3</strong> Chars!';
    }

    if(strlen($mas) < 10) {
      $formErrors[] = 'The Massage Must Be Larger Than <strong>10</strong> Chars!';
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
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <?php if(!empty($formErrors)) { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <?php 
            $count = 1;
            foreach( $formErrors as $error ) { 
              echo $count . ' - '. $error . '<br>';
              $count++;
            }
          ?>
        </div>
        <?php } ?>



        <div class="mb-3">
          <!-- <label for="usernameInbut">Username</label> -->
          <input class="form-control"  type="text" name="username" placeholder="Your Username" value="<?php if(isset($user)) {echo $user;} ?>" required>
        </div>

        <div class="mb-3">
          <!-- <label for="emailInbut">Email</label> -->
          <input class="form-control"  type="email" name="email" placeholder="Your Email" value="<?php if(isset($email)) {echo $email;} ?>"  aria-describedby="emailHelp" required>
          <div id="emailHelp" class="form-text remember">We'll never share your email with anyone else.</div>
        </div>

        
        <div class="mb-3">
          <!-- <label for="massageInbut">Your Massage</label> -->
          <textarea class="form-control"  name="massage" placeholder="Your Massage" required><?php if(isset($mas)) {echo $mas;} ?></textarea>
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