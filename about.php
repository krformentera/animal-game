<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Catch and Match</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600|Montserrat:700&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #ef2784, #020f5a);
            font-family: "Poppins", sans-serif;
            margin: 0;
            padding: 0;
            color: #010c39;
            overflow: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2em;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .about-content {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 2em;
            border-radius: 0.8em;
            box-shadow: 0 0.5em 1em rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease-in-out;
            max-width: 600px;
            margin-right: 2em;
        }

        h1 {
            font-family: "Montserrat", sans-serif;
            font-size: 2.5em;
            margin-bottom: 0.5em;
            color: #010c39;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        p {
            font-size: 1em;
            line-height: 1.6em;
            margin-bottom: 1.5em;
        }

        .image-container {
            text-align: center;
            animation: slideInRight 1s ease-in-out;
            max-width: 400px;
            opacity: 0.8;
        }

        .image-container img {
            max-width: 100%;
            border-radius: 0.8em;
            box-shadow: 0 0.5em 1em rgba(0, 0, 0, 0.2);
        }

        .button {
            display: inline-block;
            padding: 0.8em 1.5em;
            font-size: 1.2em;
            text-align: center;
            color: #ffffff;
            background-color: #010c39;
            border: none;
            border-radius: 0.4em;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
            animation: fadeInUp 1s ease-in-out;
        }

        .button:hover {
            background-color: #020f5a;
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

        @keyframes slideInRight {
            0% {
                opacity: 0;
                transform: translateX(50px);
            }

            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInUp {
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
        <div class="about-content">
            <h1>About - Catch and Match</h1>
            <p>
                "Catch and Match" is an exciting and interactive web game that challenges your matching skills. In this game, you'll be presented with various adorable animals, and your goal is to catch the correct animal and match it with its corresponding box.
            </p>
            <p>
                Test your reflexes and accuracy as you drag and drop the cute creatures to their designated spots. Each level brings a new set of delightful animals to match, keeping the gameplay fresh and engaging.
            </p>
            <p>
                "Catch and Match" is perfect for players of all ages who love a fun and educational matching experience. With its vibrant graphics, smooth gameplay, and increasing difficulty, you'll find yourself immersed in the charming world of animal matching.
            </p>
            <a href="game1.php" class="button">Start Playing</a>
        </div>
        <div class="image-container">
            <img src="./images/catch and match.png" alt="Catch and Match Game">
        </div>
    </div>
</body>

</html>