<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

        label {
            display: block;
            text-align: left;
            color: #010c39;
            font-size: 1.12em;
            margin-bottom: 0.5em;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 0.8em;
            border: 1px solid #ccc;
            border-radius: 0.4em;
            margin-bottom: 1.5em;
            font-size: 1em;
            box-sizing: border-box;
        }

        button {
            font-size: 1.12em;
            padding: 0.8em 1em;
            border-radius: 0.2em;
            border: none;
            outline: none;
            color: #ffffff;
            background-color: #010c39;
            letter-spacing: 0.06em;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #020f5a;
        }

        .register-link {
            display: block;
            margin-top: 1.5em;
            color: #010c39;
            font-size: 1em;
            text-decoration: none;
        }

        .register-link:hover {
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
        <h2>Login</h2>
        <form id="loginForm" action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
        <a href="register.php" class="register-link">Don't have an account? Register here</a>
    </div>

    <script>
        // Check if user exists in XML file
        function userExists(username, password) {
            const xhr = new XMLHttpRequest();
            xhr.open('GET', 'users.xml', false);
            xhr.send();

            const xmlDoc = new DOMParser().parseFromString(xhr.responseText, 'text/xml');
            const users = xmlDoc.getElementsByTagName('user');

            for (let i = 0; i < users.length; i++) {
                const user = users[i];
                const userUsername = user.getElementsByTagName('username')[0].textContent;
                const userPassword = user.getElementsByTagName('password')[0].textContent;

                if (username === userUsername && password === userPassword) {
                    return true;
                }
            }

            return false;
        }

        // Prevent form submission if user doesn't exist
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            if (userExists(username, password)) {
                // Redirect to gameHomePage.php
                window.location.href = 'gameHomePage.php';
            } else {
                alert('Invalid username or password');
            }
        });
    </script>
</body>

</html>