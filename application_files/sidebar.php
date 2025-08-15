<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Responsive Navbar</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    /* Navbar container */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #333;
      padding: 10px 20px;
    }

    /* Brand */
    .navbar .logo {
      color: white;
      font-size: 20px;
      font-weight: bold;
      text-decoration: none;
    }

    /* Links */
    .nav-links {
      display: flex;
      list-style: none;
    }

    .nav-links li {
      margin-left: 20px;
    }

    .nav-links a {
      color: white;
      text-decoration: none;
      padding: 8px 12px;
      transition: background 0.3s;
    }

    .nav-links a:hover {
      background-color: #575757;
      border-radius: 4px;
    }

    /* Hamburger icon */
    .hamburger {
      display: none;
      flex-direction: column;
      cursor: pointer;
    }

    .hamburger div {
      width: 25px;
      height: 3px;
      background-color: white;
      margin: 4px 0;
    }

    /* Responsive styles */
    @media (max-width: 768px) {
      .nav-links {
        display: none;
        flex-direction: column;
        width: 100%;
        background-color: #333;
        position: absolute;
        top: 60px;
        left: 0;
      }

      .nav-links.active {
        display: flex;
      }

      .hamburger {
        display: flex;
      }
    }
  </style>
</head>
<body>

  <nav class="navbar">
    <a href="#" class="logo">Brand</a>
    <ul class="nav-links" id="navLinks">
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
    <div class="hamburger" id="hamburger">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </nav>

  <script>
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.getElementById('navLinks');

    hamburger.addEventListener('click', () => {
      navLinks.classList.toggle('active');
    });
  </script>

</body>
</html>
