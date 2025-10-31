<DOCTYPE html>
    <head>
        <title>WebTech</title>

        <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: "Poppins", sans-serif;
            background: linear-gradient(150deg, #002fffff, #a34646ff, #002fffff);
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
        .card {
            background-color: transparent;
            backdrop-filter: blur(10px);
            box-shadow: inset 0 0 10px #ffffff22;
            border: 1px solid #ff0000ff;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            height: 400px;
            width: 450px;
            padding: 30px;
            text-align: center;
        }
        .card h1 {
            margin-bottom: 20px;
            font-size: 32px;
            color: #ffffffff;
        }
        .card input[type="text"],
        .card input[type="password"] {
            width: 90%;
            padding: 12px 15px;
            margin: 10px 0;
            border: 1px solid #cccccc;
            border-radius: 8px;
            font-size: 16px;
        }
        .card button {
            width: 30%;
            padding: 12px;
            margin-top: 15px;
            border: none;
            border-radius: 8px;
            background-color: #667eea;
            color: #ffffff;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .card button:hover {
            background-color: #5a67d8;
        }
        .card p {
            margin-top: 20px;
            font-size: 14px;
            color: #ffffffff;
        }
        .card p a {
            color: #ffffffff;
            text-decoration: none;
        }
        .card p a:hover {
            text-decoration: underline;
        }
        

        </style>
    </head>
    <body>

    <video id="background-video" autoplay muted loop>
    <source src="sukuna.3840x2160.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
       <div class="card">
        <form>
            <h1>Login</h1>
            <input type="text" placeholder="Username" required>
            <input type="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <p> <a href="#">Forgot your password? </a></p>
        <p>Don't have an account? <a href="#">Register here</a></p>

       </div>
    </body>
</html>