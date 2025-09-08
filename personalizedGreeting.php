<!DOCTYPE html>
<html>
<head>
  <title>PHP Greeting</title>
</head>
<body>

  <?php
  // Run only if form is submitted
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get name safely
    $name = htmlspecialchars($_POST["name"]);
    // Show greeting
    echo "<h2>Hello, $name! Welcome!</h2>";
  }
  ?>

  <!-- Form for user input -->
  <!-- Action uses PHP_SELF so the form submits back to the same page -->
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="name">Enter your name:</label>
    <input type="text" id="name" name="name" required>
    <button type="submit">Submit</button>
  </form>

</body>
</html>
