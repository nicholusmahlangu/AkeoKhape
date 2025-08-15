<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="icon" href="../assets/IMG-20250725-WA0023.jpg">
  <title>Forgot Password - RideNow</title>
  <style>
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

    .forgot-container {
      background: #fff;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 400px;
    }

    .logo {
      text-align: center;
      margin-bottom: 1.5rem;
    }

    .logo img {
      width: 120px;
    }

    .title {
      text-align: center;
      font-size: 1.5rem;
      margin-bottom: 0.5rem;
      color: #222;
    }

    .subtitle {
      text-align: center;
      font-size: 0.95rem;
      margin-bottom: 1.5rem;
      color: #666;
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

    input[type="email"] {
      padding: 0.75rem;
      margin-bottom: 1.2rem;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 1rem;
    }

    .btn-reset {
      background: #000;
      color: #fff;
      padding: 0.9rem;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .btn-reset:hover {
      background: #333;
    }

    .footer-link {
      text-align: center;
      margin-top: 1.2rem;
    }

    .footer-link a {
      color: #000;
      text-decoration: none;
      font-size: 0.9rem;
    }

    .footer-link a:hover {
      text-decoration: underline;
    }

    @media (max-width: 480px) {
      .forgot-container {
        padding: 1.5rem;
      }
    }
  </style>
</head>
<body>

  <div class="forgot-container">
    <div class="logo">
      <!-- Replace with your logo -->
      <img src="../assets/IMG-20250725-WA0023.jpg" alt="Akeokhape Logo">
    </div>
    <div class="title">Forgot Password?</div>
    <div class="subtitle">Enter your email to reset your password</div>
    <form action="/reset-password" method="POST">
      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" placeholder="you@gmail.com" required>

      <button class="btn-reset" type="submit">Send Reset Link</button>
    </form>
    <div class="footer-link">
      <p><a href="passenger_login.php">Back to Login</a></p>
    </div>
  </div>

</body>
</html>
