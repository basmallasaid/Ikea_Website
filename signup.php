
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Ikea sign up page</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>

    <div class="container">
        <h2> <i class='bx bx-registered' ></i> sign up</h2>
        <form action="functions/sup.php" method="post">
        <label for="username">username:</label>
          <input type="text" id="username" name="username" class="input" required><br>
          <label for="firstname">firstname:</label>
          <input type="text" id="firstname" name="firstname" class="input" required><br>
          <label for="lastname">lastname:</label>
          <input type="text" id="lastname" name="lastname" required class="input"><br>
          <label for="email"> <i class='bx bx-envelope' ></i> E-mail</label>
          <input type="email" id="email" name="email" required class="input"><br>
          
          <label for="password"><i class='bx bxs-key'></i> Password:</label>
          <input type="password" id="password" name="password" required class="input"><br>
          <label for="password"> <i class='bx bxs-key'></i> confirm Password:</label>
          <input type="password" id="password_confirm" name="password_confirm" required class="input"><br>
          <label for="phone"> <i class='bx bxs-contact' ></i> Enter your phone number:</label>
          <input type="tel" id="phone" name="phone" required class="input"><br>
          <label for="address"> <i class='bx bx-home'></i> Enter your address:</label><br>
          <input type="text" id="address" name="address" required class="input" placeholder="city,government,street"><br>
          
          <input type="submit" value="Register" name="Register">
          <p>Already have an account? <a href="login.php"> Log In</a></p>

        </form>
      </div>
    
</body>
</html>