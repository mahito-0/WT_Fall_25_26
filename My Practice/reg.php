<DOCTYPE html>
<html >
<head>
  <title>Glassmorphic Registration Page</title>
  <style>
    /* ---- Background Setup ---- */
    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: "Poppins", sans-serif;
      overflow: hidden;
    }

    #background-video {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
    }

    /* ---- Glass Card ---- */
  .glass-card {
  background: rgba(255, 255, 255, 0);
  backdrop-filter: blur(5px);
  -webkit-backdrop-filter: blur(5px);
  border-radius: 20px;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
  height: 500px;
  width: 480px;
  padding: 40px 35px;
  text-align: center;
  border: 1px solid rgba(255, 255, 255, 0.8);
  color: #fff;
  animation: fadeIn 1s ease-in-out;
  align-content: center;
  filter: drop-shadow(0 0 10px rgba(255, 255, 255, 0.6));
}

    .glass-card h2 {
      margin-bottom: 20px;
      font-size: 28px;
      font-weight: 600;
      color: #fff;
      letter-spacing: 1px;
    }

    /* ---- Input Fields ---- */
    .glass-card input[type="text"],
    .glass-card input[type="password"],
    .glass-card input[type="email"] {
      width: 90%;
      padding: 12px 15px;
      margin: 10px 0;
      border: none;
      border-radius: 10px;
      background: rgba(255, 255, 255, 0.15);
      color: #fff;
      font-size: 15px;
      outline: none;
      transition: all 0.3s ease;
    }

    .glass-card input::placeholder {
      color: #ddd;
    }

    .glass-card input:focus {
      background: rgba(255, 255, 255, 0.25);
      box-shadow: 0 0 8px #00ffc6;
    }

    /* ---- Button ---- */
    .glass-card input[type="submit"] {
      width: 50%;
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(5px);
      -webkit-backdrop-filter: blur(5px);
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);      border: none;
      padding: 12px 0;
      margin-top: 15px;
      border-radius: 30px;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      font-weight: bold;
      transition: all 0.3s ease;
    }

    .glass-card input[type="submit"]:hover {
      transform: scale(1.05);
      box-shadow: 0 0 12px rgba(255, 255, 255, 0.6);
      color: white;
    }

    /* ---- Links ---- */
    .links {
      margin-top: 20px;
      font-size: 14px;
    }

    .links a {
      color: #bdbdbdff;
      text-decoration: none;
      transition: 0.3s;
    }

    .links a:hover {
      text-decoration: underline;
      color: #ffffffff;
    }
  </style>
</head>
<body>

   <!-- Background Video -->
  <video id="background-video" autoplay muted loop>
    <source src="snowfall-in-forest.1920x1080.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>

  <!-- Registration Card -->
  <div class="glass-card">
    <h2>Register</h2>
    <form>
      <input type="text" placeholder="Full Name" required>
      <input type="email" placeholder="Email" required>
      <input type="text" placeholder="Username" required>
      <input type="password" placeholder="Password" required>
      <input type="submit" value="Register">
    </form>
    <div class="links">
      <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
  </div>

</body>
</html>