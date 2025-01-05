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
    <link rel="stylesheet" href="css/contact.css">
  </head>

  <body>
    <div class="container">
      <h1 class="text-center mt-3">Contact Me</h1>
      <form action="">

        <div class="mb-3">
          <!-- <label for="usernameInbut">Username</label> -->
          <input class="form-control"  type="text" name="username" placeholder="Your Username" required>
        </div>

        <div class="mb-3">
          <!-- <label for="emailInbut">Email</label> -->
          <input class="form-control"  type="email" name="email" placeholder="Your Email"  aria-describedby="emailHelp" required>
          <div id="emailHelp" class="form-text remember">We'll never share your email with anyone else.</div>
        </div>

        
        <div class="mb-3">
          <!-- <label for="massageInbut">Your Massage</label> -->
          <textarea class="form-control"  name="massage" placeholder="Your Massage" required></textarea>
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