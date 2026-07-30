<?php
include 'db.php';

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $email = $_POST['email']??'';
      $password = $_POST['password']??'';
      $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
      $stmt->bind_param("ss", $email, $password);
      $stmt->execute();
  }


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

  <div class="login-box">
    <h2>Register</h2>
    <form action="register.php" method="post">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required />

      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required />

      <button type="submit">Sign Up</button>
    </form>
    <div class="extra">
        <a href="login.php">Already have an account? Login here</a>
    </div>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      echo "Registration successful!";
  }
  ?>
  </div>
    
</body>
</html>