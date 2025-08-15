<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../assets/IMG-20250725-WA0023.jpg">
  <title>Passenger Registration</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 450px;
      margin: 60px auto;
      background-color: #ffffff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #333;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: 600;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="password"],
    input[type="file"] {
      width: 100%;
      padding: 12px;
      margin-bottom: 18px;
      border: 1px solid #ccc;
      border-radius: 6px;
      box-sizing: border-box;
      font-size: 15px;
    }

    input[type="file"] {
      padding: 10px;
    }

    .btn {
      width: 100%;
      padding: 14px;
      background-color: #1e90ff;
      color: #fff;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #0d74d1;
    }

    .note {
      text-align: center;
      margin-top: 16px;
      font-size: 14px;
      color: #555;
    }

    .note a {
      color: #1e90ff;
      text-decoration: none;
    }

    .note a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Passenger Registration</h2>
    <img src="../assets/IMG-20250725-WA0023.jpg" alt="Logo" style="display: block; margin: 0 auto 20px; width: 100px; height: auto;">
    <p>Please fill in the form below to register as a passenger.</p>
    <form action="../php_config_files/passenger_insert.php" method="post" enctype="multipart/form-data">
      <label for="fullname">Full Name</label>
      <input type="text" id="fullname" name="fullname" placeholder="John Doe" required>

      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" placeholder="john@gmail.com" required>

      <label for="phone">Phone Number</label>
      <input type="text" id="phone" name="phone" placeholder="e.g. +27675342314" required>

      <label for="pswd">Password</label>
      <input type="password" id="password" name="pswd" placeholder="Create a password" required>

      <label for="confirmPassword">Confirm Password</label>
      <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Re-enter your password" required>
      
      <label for="idUpload">Upload Certified ID Copy (PDF, JPG, PNG)</label>
      <input type="file" id="idUpload" name="idUpload" accept=".pdf, .jpg, .jpeg, .png" required>

      <button type="submit" class="btn">Register</button>

      <p class="note">Already have an account? <a href="passenger_login.php">Login here</a></p>
    </form>
  </div>

</body>
</html>
