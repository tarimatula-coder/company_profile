<?php
session_start();
include '../../app.php';
if (isset($_SESSION['email'])) {
    echo " 
         <script>    
              alert('anda harus logout dahulu');
              window.location.href='../dashboard/index.php';
          </script>
           ";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #fff, #87CEFA);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: linear-gradient(135deg, #fff, #007BFF);
            padding: 2rem;
            border-radius: 15px;
            color: white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 450px;
            animation: fadeIn 0.8s ease-in-out;
            text-align: center;
        }

        .logo {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            /* transparan */
            padding: 10px;
            border: 10px solid rgba(255, 255, 255, 0.5);
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
            object-fit: contain;
            /* biar logo nggak gepeng */
        }


        .input-group {
            margin-bottom: 1rem;
            text-align: left;
        }

        .input-group label {
            display: block;
            margin-bottom: 0.3rem;
            color: #fff;
        }

        .input-group input {
            width: 100%;
            padding: 0.7rem;
            border: 1px solid #ccc;
            border-radius: 8px;
            outline: none;
            transition: border 0.3s;
        }

        .input-group input:focus {
            border-color: #1e88e5;
        }

        .btn {
            width: 100%;
            padding: 0.7rem;
            background: #1e88e5;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn:hover {
            background: #1565c0;
        }

        .text-center {
            text-align: center;
            margin-top: 1rem;
        }

        .text-center a {
            color: #ffeb3b;
            font-weight: bold;
            text-decoration: none;
        }

        .text-center a:hover {
            text-decoration: underline;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="../../SEODash-1.0.0/SEODash-1.0.0/src/assets/images/logos/logo.png" alt="" class="logo">
        <h2>Login</h2>
        <form action="../../actions/auth/login.php" method="POST">
            
            <div class="input-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Masukkan Email" required>
            </div>
            <div class="input-group">
                <label for="password">Kata Sandi</label>
                <input type="password" id="password" name="password" placeholder="Masukkan kata sandi..." required>
            </div>
            <button type="submit" class="btn">Masuk</button>
        </form>
    </div>
</body>

</html>