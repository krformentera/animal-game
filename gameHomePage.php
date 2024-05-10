<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600|Montserrat:700&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #ef2784, #020f5a);
            font-family: "Poppins", sans-serif;
            margin: 0;
            padding: 0;
            color: #010c39;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 3em 2em;
            border-radius: 0.8em;
            box-shadow: 0 0.5em 1em rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
            animation: fadeIn 1s ease-in-out;
        }

        h2 {
            font-family: "Montserrat", sans-serif;
            font-size: 2.5em;
            margin-bottom: 1em;
            color: #010c39;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .button {
            display: block;
            width: 90%;
            padding: 1em;
            margin-bottom: 1em;
            font-size: 1.2em;
            text-align: center;
            color: #ffffff;
            background-color: #010c39;
            border: none;
            border-radius: 0.4em;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .button:hover {
            background-color: #020f5a;
        }

        .button-icon {
            margin-right: 0.5em;
        }

        .logout-button {
            display: block;
            margin-top: 1.5em;
            color: #010c39;
            font-size: 1em;
            text-decoration: none;
        }

        .logout-button:hover {
            text-decoration: underline;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Home Page</h2>
        <a href="profile.php" class="button">
            <span class="button-icon">👤</span> Profile
        </a>
        <a href="game1.php" class="button">
            <span class="button-icon">🎮</span> Play
        </a>
        <a href="about.php" class="button">
            <span class="button-icon">ℹ️</span> About
        </a>
        <a href="howToPlay.php" class="button">
            <span class="button-icon">❓</span> How to Play
        </a>
        <a href="StartingPage.php" class="logout-button">Logout</a>
    </div>
</body>

</html>