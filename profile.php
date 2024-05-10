<!DOCTYPE html>
<html>

<head>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>Profile</title>
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

    .avatar {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      background-color: #f2f2f2;
      margin: 0 auto 1.5em;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 3em;
      color: #010c39;
    }

    .back-button {
      display: inline-block;
      margin-top: 1.5em;
      color: #010c39;
      text-decoration: none;
      font-size: 1.12em;
    }

    .back-button:hover {
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
  <script>
    $(document).ready(function() {
      // Handle form submission
      $('#profile-form').on('submit', function(event) {
        event.preventDefault();
        // Get username from form
        var username = $('#username').val();

        // Load user data from XML file
        $.get('users.xml', function(data) {
          var xml = $(data);
          var user = xml.find('user').filter(function() {
            return $(this).find('username').text() === username;
          });

          if (user.length) {
            // User found, show change password form
            $('#change-password-form').show();
            $('#change-password-form input[name="username"]').val(username);
            $('#profile-form input[type="submit"]').hide(); // Hide the "Change Password" button
          } else {
            alert('User not found');
          }
        });
      });

      // Handle password change form submission
      $('#change-password-form').on('submit', function(event) {
        event.preventDefault();
        // Get new password and confirm password from form
        var newPassword = $('#new-password').val();
        var confirmPassword = $('#confirm-password').val();
        var username = $('#change-password-form input[name="username"]').val();

        if (newPassword !== confirmPassword) {
          alert('Passwords do not match');
          return;
        }

        // Send XML data to update-user.php
        $.post('update-user.php', {
          username: username,
          newPassword: newPassword
        }, function(data) {
          if (data === 'success') {
            alert('Password changed successfully');
            window.location.href = 'gameLogin.php';
          } else {
            alert('Failed to change password: ' + data);
          }
        });
      });
    });
  </script>
</head>

<body>
  <div class="container">
    <h2>Profile</h2>
    <div class="avatar">😊</div>
    <form id="profile-form">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
      <input type="submit" value="Change Password">
    </form>
    <form id="change-password-form" style="display: none;">
      <label for="new-password">New Password:</label>
      <input type="password" id="new-password" name="new-password" required>
      <label for="confirm-password">Confirm Password:</label>
      <input type="password" id="confirm-password" name="confirm-password" required>
      <input type="hidden" name="username" value="">
      <input type="submit" value="Change Password">
    </form>
    <a href="gameHomePage.php" class="back-button">Back to Home</a>
  </div>
</body>

</html>