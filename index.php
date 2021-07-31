<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="./style.css">
  <script defer src="script.js"></script>
</head>

<body>
<main id="main-holder">
    <img width="150px" src="./images/Logo_university.png" alt="Logo" />
    <h1 class="title" id="login-header">Login</h1>
    <div style="position: relative; top: -60px;">
      <div id="login-error-msg-holder">
        <p id="login-error-msg">Invalid username <span id="error-msg-second-line">and/or password</span></p>
      </div>
      
      <form id="login-form">
        <input type="text" name="username" id="username-field" class="login-form-field" placeholder="University number">
        <input type="password" name="password" id="password-field" class="login-form-field" placeholder="Password">
        <input type="submit" value="Login" id="login-form-submit">
      </form>
      <div>
        <p style="font-size: 12px;">you don't have an account ? 
          <button>
            <a href="./register.html">
Register
            </a>            
          </button></p>

      </div>
      

    </div>

  
  </main>
</body>

</html>