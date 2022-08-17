<?php 
session _start();
 $_SESSION;
?>







<html>
    <head>
       <meta name="viewport" content="with=device-width,intial-scale=1.0">
       <title>Login</title>
       <link rel="stylesheet" href="style.css">
       <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="icon" type="image/png" href="C:\Users\avnee\Desktop\cr\PR2\favicon-16x16.png">
<link href="https://fonts.googleapis.com/css2?family=BIZ+UDPMincho&display=swap" rel="stylesheet">
               
 




<style type="text/css">
  
  body {
  font: 13px/20px "Lucida Grande", Tahoma, Verdana, sans-serif;
  color: #404040;
  background: #0ca3d2;
}

.login {
  height: 350px;
  position: relative;
  margin: 30px auto;
  padding: 20px 20px 20px;
  width: 310px;
  background: white;
  border-radius: 3px;
  -webkit-box-shadow: 0 0 200px rgba(255, 255, 255, 0.5), 0 1px 2px rgba(0, 0, 0, 0.3);
  box-shadow: 0 0 200px rgba(255, 255, 255, 0.5), 0 1px 2px rgba(0, 0, 0, 0.3);
}

.login:before {
  content: '';
  position: absolute;
  top: -8px;
  right: -8px;
  bottom: -8px;
  left: -8px;
  z-index: -1;
  background: rgba(0, 0, 0, 0.08);
  border-radius: 4px;
}

.login h1 {
  
  margin: -20px -20px 21px;
  line-height: 40px;
  font-size: 15px;
  font-weight: bold;
  color: #555;
  text-align: center;
  text-shadow: 0 1px white;
  background: #f3f3f3;
  border-bottom: 1px solid #cfcfcf;
  border-radius: 3px 3px 0 0;
  background-image: -webkit-linear-gradient(top, whiteffd, #eef2f5);
  background-image: -moz-linear-gradient(top, whiteffd, #eef2f5);
  background-image: -o-linear-gradient(top, whiteffd, #eef2f5);
  background-image: linear-gradient(to bottom, whiteffd, #eef2f5);
  -webkit-box-shadow: 0 1px whitesmoke;
  box-shadow: 0 1px whitesmoke;
}

.login p {
  margin: 20px 0 0;
}

.login p:first-child {
  margin-top: 0;
}

.login input[type=text], .login input[type=password] {
  width: 278px;
}

.login p.remember_me {
  float: left;
  line-height: 31px;
}

.login p.remember_me label {
  font-size: 12px;
  color: #777;
  cursor: pointer;
}

.login p.remember_me input {
  position: relative;
  bottom: 1px;
  margin-right: 4px;
  vertical-align: middle;
}

.login p.submit {
  text-align: right;
}

.login-help {
  margin: 20px 0;
  font-size: 11px;
  color: white;
  text-align: center;
  text-shadow: 0 1px #2a85a1;
}

.login-help a {
  color: #cce7fa;
  text-decoration: none;
}

.login-help a:hover {
  text-decoration: underline;
}

:-moz-placeholder {
  color: #c9c9c9 !important;
  font-size: 13px;
}

::-webkit-input-placeholder {
  color: #ccc;
  font-size: 13px;
}

input {
  font-family: 'Lucida Grande', Tahoma, Verdana, sans-serif;
  font-size: 14px;
}

input[type=text], input[type=password] {
  margin: 5px;
  padding: 0 10px;
  width: 200px;
  height: 34px;
  color: #404040;
  background: white;
  border: 1px solid;
  border-color: #c4c4c4 #d1d1d1 #d4d4d4;
  border-radius: 2px;
  outline: 5px solid #eff4f7;
  -moz-outline-radius: 3px;
  -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);
}

input[type=text]:focus, input[type=password]:focus {
  border-color: #7dc9e2;
  outline-color: #dceefc;
  outline-offset: 0;
}

input[type=submit] {
  
  width: 250px;
  padding: 0 18px;
  height: 29px;
  font-size: 12px;
  font-weight: bold;
  color: #527881;
  text-shadow: 0 1px #e3f1f1;
  background: #cde5ef;
  border: 1px solid;
  border-color: #b4ccce #b3c0c8 #9eb9c2;
  border-radius: 16px;
  outline: 0;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  background-image: -webkit-linear-gradient(top, #edf5f8, #cde5ef);
  background-image: -moz-linear-gradient(top, #edf5f8, #cde5ef);
  background-image: -o-linear-gradient(top, #edf5f8, #cde5ef);
  background-image: linear-gradient(to bottom, #edf5f8, #cde5ef);
  -webkit-box-shadow: inset 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.15);
}

input[type=submit]:active {
  background: #cde5ef;
  border-color: #9eb9c2 #b3c0c8 #b4ccce;
  -webkit-box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.2);
  box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.2);
}

.lt-ie9 input[type=text], .lt-ie9 input[type=password] {
  line-height: 34px;
}
.signup{
  top:570px;
  position: absolute;
  left: 660px;
  }
  .signup a{
    color: #51bec8 ;
  }
</style>











</head>
  <body>
      <section class="header">
         <nav>
             <a href="index.html"><img src="C:\Users\avnee\Desktop\PR2\CALORIFY-logos.jpg"></a>
             <div class="nav-links">
                <ul>
                    <li><a href="terminal.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="track.html">TRACK CALORIE</a></li>
                    <li><a href="blog.html">BLOG</a></li>
                    <li><a href="Contact.html">CONTACT</a></li>
                </ul> 
         </nav>
              
         <div class="login">
          <h1>Login to Web App</h1>
          <form method="post" action="">
            <p><input type="text" name="login" value="" placeholder="Username or Email"></p>
            <p><input type="password" name="password" value="" placeholder="Password"></p>
            <p class="remember_me">
              <label>
                <input type="checkbox" name="remember_me" id="remember_me">
                Remember me on this computer
              </label>
            </p>
            <p class="submit"><input type="submit" name="commit" value="Login"></p>
          </form>
        </div>
        <div>
          <p class="signup">New User <a href="C:\Users\avnee\Desktop\cr\PR2\signup.html">Sign Up</a></p>
        </div>
        <div class="login-help">
          <p>Forgot your password? <a href="C:\Users\avnee\Desktop\cr\PR2\forgot.html">Click here to reset it</a>.</p>
        </div>







      <footer>
        <div class="row primary">
          <div class="column about">
        
          <h3>CALORIFY</h3>
        
           <p class="foot">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae,
              voluptatem corporis error non,
          </p>
        
          <div class="social">
            <i class="fa-brands fa-facebook-square"></i>
            <i class="fa-brands fa-instagram-square"></i>
            <i class="fa-brands fa-twitter-square"></i>
            <i class="fa-brands fa-youtube-square"></i>
            <i class="fa-brands fa-whatsapp-square"></i>
          </div>
        </div>
        
        <div class="column links">
        <h3>Links</h3>
        
         <ul class="foot">
        
          <li>
            <li><a href="terminal.html">HOME</a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="track.html">TRACK CALORIE</a></li>
            <li><a href="blog.html">BLOG</a></li>
            <li><a href="Contact.html">CONTACT</a></li>
         </ul>
        
        </div>
        
        
        <div class="column links">
          <h3>Links</h3>
           <ul class="foot">
            <li>
             <a href="#faq">F.A.Q</a>
            </li>
            <li>
             <a href="#cookies-policy">Cookies Policy</a>
            </li>
            <li>
            <a href="#terms-of-services">Terms Of Service</a>
            </li>
            <li>
            <a href="#support">Support</a>
            </li>
          </ul>
        </div>
        
        <div class="column subscribe">
         <h3>Newsletter</h3>
          <div>
           <input type="email" placeholder="Your email id here" />
           <button class="b1">Subscribe</button>
          </div>
        
        </div>
        
        </div>
        <div class="row copyright">
          <div class="footer-menu">
        <!--
        
        
          <a href="">Home</a>
          <a href="">About</a>
          <a href="">Contact</a>
          <a href="">Blog</a>
          <a href="">Social</a>
        
          </div>-->
           <p>Copyright &copy; 2022 Calorify</p>
        </div>
        </footer>
    </div>
  </body>
</html>


