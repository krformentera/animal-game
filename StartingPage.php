<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login or Register</title>
    <style>
        body {
            background: linear-gradient(135deg, #ef2784, #020f5a);
            font-family: "Poppins", sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 3em 2em;
            border-radius: 0.8em;
            text-align: center;
            box-shadow: 0 0.5em 1em rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease-in-out;
        }

        h2 {
            color: #010c39;
            font-size: 2em;
            margin-bottom: 1.5em;
        }

        .button {
            display: block;
            width: 100%;
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
    </style>
</head>

<body>
    <div class="container">
        <h2>Login or Register</h2>
        <button class="button" onclick="window.location.href='register.php'">Register</button>
        <button class="button" onclick="window.location.href='gameLogin.php'">Login</button>
    </div>
</body>

</html>