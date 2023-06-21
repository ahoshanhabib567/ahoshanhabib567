<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the submitted username and password
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Perform basic authentication
  if ($username === 'admin' && $password === 'password123') {
    // Authentication successful
    echo 'Authentication successful! Welcome, ' . $username;
  } else {
    // Authentication failed
    echo 'Authentication failed! Invalid username or password.';
  }
}
?>
  
