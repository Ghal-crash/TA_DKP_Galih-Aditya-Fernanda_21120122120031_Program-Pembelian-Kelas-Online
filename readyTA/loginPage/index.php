<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
<div class="wrapper">
      <div class="title-text">
        <div class="title login">
          Login
        </div>
      </div>
        <div class="form-inner">
          <form action="./cek_login.php" class="login" method="POST">
            <div class="field">
              <input type="email" name="email" placeholder="Masukan Email " required>
            </div>
            <div class="field">
              <input type="password" name="password" placeholder="Masukan Password" required>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Login">
            </div>
          </form>
        </div>
      </div>
    </div>
  <script src="./script.js"></script>
</body>
</html>
