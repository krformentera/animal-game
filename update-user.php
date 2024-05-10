<?php
if (isset($_POST['username']) && isset($_POST['newPassword'])) {
  $username = $_POST['username'];
  $newPassword = $_POST['newPassword'];

  // Load user data from XML file
  $xml = simplexml_load_file('users.xml');

  // Find user with matching username
  $user = $xml->xpath("//user[contains(., '$username')]");

  if (!empty($user)) {
    // Change password of found user
    $user[0]->password = $newPassword;

    // Save updated XML data to file
    $xml->asXML('users.xml');

    // Send success response
    echo 'success';
  } else {
    // Send error response
    echo 'User not found';
  }
} else {
  // Send error response
  echo 'Invalid request';
}
?>