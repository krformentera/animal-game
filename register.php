<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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

        .logo {
            width: 100px;
            height: 100px;
            margin: 0 auto 1.5em;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 3em;
            color: #010c39;
            background-color: #f2f2f2;
            border-radius: 50%;
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

        input[type="submit"] {
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

        input[type="submit"]:hover {
            background-color: #020f5a;
        }

        .error {
            color: red;
            margin-bottom: 1em;
        }

        .login-link {
            display: block;
            margin-top: 1.5em;
            color: #010c39;
            font-size: 1em;
            text-decoration: none;
        }

        .login-link:hover {
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
        <div class="logo">🐾</div>
        <h2>Register</h2>
        <?php
        // Function to register a new user
        function registerUser($username, $password)
        {
            // Load existing XML file or create a new one if it doesn't exist
            $xml = file_exists('users.xml') ? simplexml_load_file('users.xml') : new SimpleXMLElement('<users></users>');

            // Check if username already exists
            foreach ($xml->user as $user) {
                if ($user->username == $username) {
                    return false; // Username already exists
                }
            }

            // Add new user to XML
            $newUser = $xml->addChild('user');
            $newUser->addChild('username', $username);
            $newUser->addChild('password', $password);

            // Save XML file
            $xml->asXML('users.xml');

            return true; // Registration successful
        }

        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve username and password from form
            $username = $_POST["username"];
            $password = $_POST["password"];

            // Validate required fields
            $errors = [];
            if (empty($username)) {
                $errors[] = "Username is required.";
            }
            if (empty($password)) {
                $errors[] = "Password is required.";
            }

            // Display error messages if any
            if (!empty($errors)) {
                foreach ($errors as $error) {
                    echo "<p class='error'>$error</p>";
                }
            } else {
                // Register user
                $registrationSuccess = registerUser($username, $password);

                // Redirect user based on registration success
                if ($registrationSuccess) {
                    // Registration successful, redirect to game login page
                    header("Location: gameLogin.php?registration=success");
                    exit();
                } else {
                    // Registration failed, display error message
                    echo "<p class='error'>Username already exists. Please choose a different username.</p>";
                }
            }
        }
        ?>

        <form action="" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <label>
                <input type="checkbox" onclick="togglePasswordVisibility()"> Show password
            </label>
            <input type="submit" value="Register">
        </form>

        <a href="gameLogin.php" class="login-link">Already have an account? Login here</a>
    </div>

    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById("password");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }
    </script>
</body>

</html>