<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>

        <style>
        body {
            font-family: "Poppins", sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
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

         header {
                position: sticky;
                top: 0;
                z-index: 100;
            }
            
            .header-content {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            
            header h1 {
                font-size: 36px;
                color: #ffffffff;
                font-weight: 700;
                letter-spacing: -1px;
            }
            
            nav a {
                margin: 0 15px;
                text-decoration: none;
                color: #ffffffff;
                font-size: 18px;
                font-weight: 500;
                border-radius: 4px;
                transition: all 0.3s ease;
            }
            
            nav a:hover {
                color: white;
                text-decoration: none;
                transform: scale(1.1) ;
            }

        </style>
    </head>
    <body>

    <video id="background-video" autoplay muted loop>
    <source src="sukuna.3840x2160.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
        <header>
            <div class="container">
                <div class="header-content">
                    <h1>HOME</h1>
                    <nav>
                        <a href="#">About</a>
                        <a href="#">Login</a>
                        <a href="#">Signup</a>
                        
                    </nav>
                </div>
            </div>
        </header>
    </body>