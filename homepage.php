<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link href="css/homepage.css" rel="stylesheet" type="text/css">
<link href="css/login.css" rel="stylesheet" type="text/css">
<link href="css/registration.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="registration.js"></script>
<script type="text/javascript" src="access.js"></script>
<body style="background-image: url('css/images/login.jpg');">
</head>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  <div class="w3-display-middle" style="height: 400px;">
    <h1 class="w3-jumbo w3-animate-top">Il lavoro per te</h1>
    <button class="shadow-button buttonlogin" onclick="document.getElementById('accesso').style.display='block'">Accedi</button> 
    <button class="shadow-button buttonlogin" onclick="document.getElementById('registrazione').style.display='block'">Registrati</button>
  </div>
</div>

<div id="registrazione" class="modal">
  <form class="modal-content" action="/action_page.php"> 
    <div class="container">
      <label><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="user" required>
      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
      <label><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      <label>
        <input type="checkbox" checked="checked" style="margin-bottom:15px"> Remember me
      </label>
      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('registrazione').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signup">Registrati</button>
      </div>
    </div>
  </form>
</div>

<div id="accesso" class="modal">
  <form class="modal-content" action="/action_page.php"> 
    <div class="container">
      <label><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
      <label>
        <input type="checkbox" checked="checked" style="margin-bottom:15px"> Remember me
      </label>
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('accesso').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="login">Accedi</button>
        <a href="mainpage.php"</a>Vai
      </div>
    </div>
  </form>
</div>

</body>
</html>