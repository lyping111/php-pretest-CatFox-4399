<?php
include 'db.php';
    $alert="";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email']??'';
        $password = $_POST['password']??'';
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        
         if ($result->num_rows > 0) {
              $alert="Login successful!";
            } else {
                $alert="Invalid email or password!";
            }
        }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="style.css" />

</head>
<body>
  <div class="login-box">

    <h2>Login</h2>
    <form action="login.php" method="post">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required />

      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required />

      <button type="submit">Sign In</button>
    </form>
    <div class="extra">
        <a href="register.php">Don't have an account? Register here</a>
    </div>
      <?=$alert?>
  </div>
  
</body>
</html>
