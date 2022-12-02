

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div id="inputContainer">
<form action="register.php" id="loginForm" method="POST">
  <h2>Login to your account</h2>
  <p>
    <label for="loginUsername">Username</label>
  <input name="loginUsername" type="text" id="loginUsername" placeholder="name" required>
  </p>
  <p>
  <label for="loginPassword">Password</label>  
  <input name="loginPassword" type="password" id="loginPassword" required></p>
<button type="submit" name="loginButton">LOG IN</button>   
</form>



<form action="register.php" id="registerForm" method="POST">
  <h2>Create your account</h2>
  <p>
    <label for="username">Username</label>
  <input name="username" type="text" id="username" placeholder="name" required>
  </p>
  <p>
    <label for="firstName">First Name</label>
  <input name="firstName" type="text" id="firstName" placeholder="first name" required>
  </p>
  <p>
    <label for="lastName">Last Name</label>
  <input name="lastName" type="text" id="lastName" placeholder="lastName" required>
  </p>
  <p>
    <label for="email">Email</label>
  <input name="email" type="email" id="email" placeholder="email" required>
  </p>
  <p>
    <label for="email2">Username</label>
  <input name="email2" type="email" id="email2" placeholder="confirm email" required>
  </p>
  <p>
  <label for="password">Password</label>  
  <input name="password" type="password" id="password" required></p>

  <label for="password2">Confirm Password</label>  
  <input name="password2" type="password" id="password2" required></p>


  <button type="submit" name="registerButton">Sign up</button>   

</form>



  </div>
</body>
</html>