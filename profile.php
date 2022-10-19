<!DOCTYPE html>
<html lang="en">
    <head>
        <title>XENONSTACK</title>
        <meta charset="UTF-8">
        <meta name="Viewport" content="width=device-width,initial-scale=1.0">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">
    
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

       <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

     <!-- Latest compiled JavaScript -->
     <link rel="stylesheet" href="Screen.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
     
     <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        form {border: 2px solid #f1f1f1;}
        
        input[type=text], input[type=password] {
          width: 90%;
          padding: 8px 8px;
          margin: 10px 0;
          border: 1px solid #ccc;
          box-sizing: border-box;
        }
        
        button {
          background-color: #04AA6D;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 100%;
        }
        
        button:hover {
          opacity: 0.8;
        }
        
        .cancelbtn {
          width: auto;
          padding: 10px 18px;
          background-color: #f44336;
        }
        
        .imgcontainer {
          text-align: center;
          margin: 24px 0 12px 0;
        }
        
        img.avatar {
          width: 10%;
          border-radius: 50%;
        }
        
        .container {
          padding: 5px;
        }
        
        .span.psw {
          float: right;
          padding-top: 16px;
        }
        .h2{
            text-align: center;
        }
        .profile{
            padding: 100px 10px;
            width: 100%;
        }
        
        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
          span.psw {
             display: block;
             float: none;
          }
          .cancelbtn {
             width: 100%;
          }
        }
        </style>

  </head>
<body>
    <div class="header" id="topheader">
        <nav class="navbar navbar-expand-lg fixed-top">
          <div class="container text-uppercase p-2">
            <a class="navbar-brand font-weight-bold text-white" href="#">XENONSTACK</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
      
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto text-uppercase">
                    
                </ul>
         </div>
        </div>
       </nav>
       <section class="header-section">
        <div class="center-div">
          <h1 class="font-weight-bold">
            Find The Perfect Job That You Deserve
          </h1>
          <h3>Let's Find your Dream Job</h3>
          <p>Run by : Chandan Kumar</p>
          <div class="header-buttons">
            <a href="index.php">Contact Us</a>
            <a href="signup.php">Sign Up</a>
          </div>
        </div>
       </section>
    </div>
    <!--***header parts ends***-->
  
    <!--profile section-->
   <div class="profile">
        <h2 class="h2">Login Form</h2><hr>
       
        <div class="imgcontainer">
         <img src="icon/administration.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
        <form action="code.php" method="post">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
        
        <button type="submit" name="login" >Login</button>
        </form>
       <label>
         <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
        </div>
        
        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
   
</div>

    <!--profile section end-->
   

    
</body>
</html>