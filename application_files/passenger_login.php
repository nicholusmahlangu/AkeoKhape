<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="icon" href="../assets/IMG-20250725-WA0023.jpg">
  <title>Login - RideNow</title>
  <style>
    /* Reset some defaults */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Helvetica Neue', sans-serif;
      background: #f2f2f2;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .login-container {
      background: #fff;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 400px;
    }

    .login-logo {
      text-align: center;
      margin-bottom: 1.5rem;
    }

    .login-logo img {
      width: 120px;
    }

    .login-title {
      text-align: center;
      font-size: 1.5rem;
      margin-bottom: 1rem;
      color: #222;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      font-size: 0.9rem;
      margin-bottom: 0.3rem;
      color: #555;
    }

    input[type="email"],
    input[type="password"] {
      padding: 0.75rem;
      margin-bottom: 1.2rem;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 1rem;
    }

    .btn-login {
      background: #000;
      color: #fff;
      padding: 0.9rem;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .btn-login:hover {
      background: #333;
    }

    .form-footer {
      text-align: center;
      margin-top: 1rem;
    }

    .form-footer a {
      color: #000;
      text-decoration: none;
      font-size: 0.9rem;
    }

    .form-footer a:hover {
      text-decoration: underline;
    }

    @media (max-width: 480px) {
      .login-container {
        padding: 1.5rem;
      }
    }
  </style>
</head>
<body>

  <div class="login-container">
    <div class="login-logo">
      <!-- Replace with your logo -->
      <img src="../assets/IMG-20250725-WA0023.jpg" alt="Akeokhape Logo">
    </div>
    <div class="login-title">Sign in to RideNow</div>
    <form action="/dashboard" method="POST">
      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" placeholder="you@gmail.com" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="••••••••" required>

      <button class="btn-login" type="submit">Login</button>
    </form>
    <div class="form-footer">
      <p><a href="forgot_password.php">Forgot your password?</a></p>
      <p>Don't have an account? <a href="passenger_registration.php">Sign up</a></p>
    </div>
  </div>

</body>
</html>
