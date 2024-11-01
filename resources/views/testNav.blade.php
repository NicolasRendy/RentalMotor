<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login/Signup Form</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="form-container">
  <form id="login-form" class="form">
    <h2>Login</h2>
    <input type="text" id="username" placeholder="Email or Username" required>
    <input type="password" id="password" placeholder="Password" required>
    <button type="submit">Login</button>
  </form>
  <form id="signup-form" class="form">
    <h2>Sign Up</h2>
    <input type="text" id="new-username" placeholder="Email or Username" required>
    <input type="password" id="new-password" placeholder="Password" required>
    <button type="submit">Sign Up</button>
  </form>
</div>
</body>
<script>
document.getElementById('login-form').addEventListener('submit', function(event) {
  var username = document.getElementById('username').value;
  var password = document.getElementById('password').value;

  if (!username || !password) {
    alert('Please enter both username/email and password.');
    event.preventDefault();
  }
});

document.getElementById('signup-form').addEventListener('submit', function(event) {
  var newUsername = document.getElementById('new-username').value;
  var newPassword = document.getElementById('new-password').value;
  var confirmPassword = document.getElementById('confirm-password').value;

  if (!newUsername || !newPassword || !confirmPassword) {
    alert('Please fill in all fields.');
    event.preventDefault();
  } else if (newPassword !== confirmPassword) {
    alert('Passwords do not match.');
    event.preventDefault();
  }
});

We 
</script>
</html>