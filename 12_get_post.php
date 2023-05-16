<?php
/*
  ---------- $_GET and $_POST superglobals --------

  > Data can be passed through forms and URLs using the $_GET and
  $_POST superglobals.

  NOTE: with $_GET, the data gets appended to the URL, hence it's not
  the best option when handling sensitive
*/

// gets data from the URL when the link is clicked
if (isset($_GET['email'])) {
  echo '<h3>Email from URL: ' . $_GET['email'] . '</h3><br>';
}

// gets data from the form when it is submitted
if (isset($_POST['submit'])) {
  echo '<h3>Username from form: ' . $_POST['name'] . '</h3><br>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Get and Post Superglobals</title>
</head>

<body>
  <!-- Pass data through a link -->
  <a href="<?php echo $_SERVER['PHP_SELF']; ?>?email=example@localhost.com">Click here to send name over URL</a>
  <br><br>

  <!-- Pass data through a form -->
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
      <label>Name: </label>
      <input type="text" name="name">
    </div>
    <br>
    <div>
      <label>Password: </label>
      <input type="password" name="password">
    </div>
    <br>
    <input type="submit" name="submit" value="Submit">
  </form>
</body>

</html>