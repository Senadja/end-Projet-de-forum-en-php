<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #f8aff8, #61dafb);
            color: #333;
            text-align: center;
            padding: 0;
            margin: 0;
        }

        .container {
            margin-top: 50px;
        }

        h2 {
            font-size: 3em;
            margin-bottom: 20px;
            color: #fff;
            animation: fadeIn 2s ease-in-out;
        }

        p {
            font-size: 1.2em;
            margin-bottom: 30px;
            color: #fff;
            animation: fadeIn 2s ease-in-out;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1.2em;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s ease;
        }

        a:hover {
            background: #0056b3;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .welcome-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            animation: slideIn 1.5s ease-out;
        }

        @keyframes slideIn {
            from { transform: translateY(-50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const welcomeText = document.querySelector('h2');
            const welcomeSubText = document.querySelector('p');
            const welcomeLink = document.querySelector('a');

            welcomeText.style.opacity = 0;
            welcomeSubText.style.opacity = 0;
            welcomeLink.style.opacity = 0;

            setTimeout(() => welcomeText.style.opacity = 1, 500);
            setTimeout(() => welcomeSubText.style.opacity = 1, 1000);
            setTimeout(() => welcomeLink.style.opacity = 1, 1500);
        });
    </script>
</head>
<body>
    <?php include 'includes/navbar.php'; ?>
    <div class="container">
        <div class="welcome-container">
            <h2>Bienvenue sur Les p'tites bricoles :D</h2>
            <p>Bienvenue sur notre site de bricolage communautaire ! Que vous soyez un bricoleur débutant ou expert, vous trouverez ici des ressources, des projets inspirants et une communauté prête à vous aider.</p>
            <p><a href="index.php">Accéder au forum</a></p>
        </div>
    </div>
</body>
</html>
