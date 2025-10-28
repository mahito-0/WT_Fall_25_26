<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Glassmorphic Login Page</title>
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
      background: linear-gradient(135deg, #667eea, #764ba2);
      background-attachment: fixed;
      overflow: hidden;
    }

    /* ---- Glass Card ---- */
    .glass-card {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
      width: 400px;
      padding: 40px 35px;
      text-align: center;
      border: 1px solid rgba(255, 255, 255, 0.2);
      color: #fff;
      animation: fadeIn 1s ease-in-out;
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
    .glass-card input[type="password"] {
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
      background: linear-gradient(135deg, #00bfa6, #00ffcc);
      border: none;
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
      background: linear-gradient(135deg, #00ffcc, #00bfa6);
      transform: scale(1.05);
      box-shadow: 0 0 12px rgba(0, 255, 204, 0.6);
      color: black;
    }

    /* ---- Links ---- */
    .links {
      margin-top: 20px;
      font-size: 14px;
    }

    .links a {
      color: #00ffcc;
      text-decoration: none;
      transition: 0.3s;
    }

    .links a:hover {
      text-decoration: underline;
      color: #fff;
    }

    /* ---- Floating Gradient Circles ---- */
    .circle {
      position: absolute;
      border-radius: 50%;
      filter: blur(80px);
      opacity: 0.5;
      z-index: -1;
      animation: float 8s infinite ease-in-out;
    }

    .circle:nth-child(1) {
      width: 250px;
      height: 250px;
      top: 10%;
      left: 15%;
      background: #00ffcc;
    }

    .circle:nth-child(2) {
      width: 300px;
      height: 300px;
      bottom: 10%;
      right: 10%;
      background: #ff00c8;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0px); }
      50% { transform: translateY(-30px); }
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: scale(0.9); }
      to { opacity: 1; transform: scale(1); }
    }

    @media (max-width: 400px) {
      .glass-card {
        width: 90%;
        padding: 30px 20px;
      }
    }
  </style>
</head>
<body>

  <!-- Floating Background Circles -->
  <div class="circle"></div>
  <div class="circle"></div>

  <!-- Login Card -->
  <div class="glass-card">
    <h2>Login</h2>
    <form>
      <input type="text" placeholder="Username" required>
      <input type="password" placeholder="Password" required>
      <input type="submit" value="Login">
    </form>
    <div class="links">
      <p><a href="#">Forgot Password?</a></p>
      <p>Don’t have an account? <a href="#">Sign Up</a></p>
    </div>
  </div>

</body>
</html>
