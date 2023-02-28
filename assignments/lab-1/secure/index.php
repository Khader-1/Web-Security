<!DOCTYPE html>
<html>

<head>
  <title>Login Page</title>
</head>

<body>
  <h1>Login Page</h1>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <input type="submit" name="login" value="Login">
  </form>
  <?php
  include("db_connection.php");
  $wrong_pass = 0;
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['login'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];

      $stmt = $conn->prepare("SELECT * FROM users WHERE email=? AND password=?");
      $stmt->bind_param("ss", $email, $password);
      $stmt->execute();
      $result = $stmt->get_result();
      
      if ($result->num_rows == 1) {
        $wrong_pass = 2;
        $row = $result->fetch_assoc();
        session_start();
        $_SESSION['username'] = $row["name"];        
        header("Location: success.php");
        exit();
      } else {
        $wrong_pass = 1;
      }
    }
  } else if ($wrong_pass == 1) {
    echo "<p style='color: red; text-align: center;'>Invalid email or password.</p>";
  }

  ?>
</body>

</html>