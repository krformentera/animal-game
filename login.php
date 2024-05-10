<?php
// Function to check user credentials during login
function loginUser($username, $password) {
    // Load XML file
    $xml = simplexml_load_file('users.xml');

    // Check if username and password match
    foreach ($xml->user as $user) {
        if ($user->username == $username && $user->password == $password) {
            return true; // Login successful
        }
    }

    return false; // Login failed
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Login user
    $loginSuccess = loginUser($username, $password);

    // Redirect user based on login success
    if ($loginSuccess) {
        // Login successful, redirect to welcome page or any other page
        header("Location: welcome.html");
        exit();
    } else {
        // Login failed, redirect back to login page with error message
        header("Location: loginPage.html?error=login_failed");
        exit();
    }
} else {
    // If form is not submitted, redirect back to login page
    header("Location: loginPage.html");
    exit();
}
?>
