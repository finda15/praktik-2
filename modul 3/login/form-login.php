<!DOCTYPEhtml>
<html>
    <head>
    <title>Laman Login</title>
    <style media="screen">
    
    body {
      background: url("pict/1.jpg");
      background-size: cover;
      margin: 0;
    }

    input {
      width: 70%;
      outline: none;
      padding: 10px 11px;
      border: 1px #aaa solid;
      font-size: 15px;
      background: #fff;
      display: block;
      margin: 20px auto;
      border-radius: 7px;
    }

    input[type="text"]:focus,
    input[type="password"]:focus
    {
      border: 1px solid darkblue;
    }

    #Login{
      background: #19b1ca;
      color: #fff;
      border: none;
    }

    #Login:hover{color: darkblue;}

    div{
      width: 30%;
      height: 400px;
      background: rgba(0,0,0,.2);
      box-shadow: 5px 4px 43px #000;
      position: absolute;
      top: 100px;
      left: 500px;
    }

    form{
      margin: 30px auto;
      text-align: center;
    }

    h2{
      font-size: 35px;
      color: #fff;
    }

    a{
      color: #fff;
    }

    img{
      display: block;
      margin: -75px auto 0 auto;
      width: 140px;
      height: 135px;
    }
    </style>
    </head>
    <body>
        <div id ="form">
        <img src="pict/Icon-user.png" alt="">
        <form action="login.php" method="post" onSubmit = "validasi()">
            <h2> Login </h2>
            <input type="text" name="username" id="username" placeholder="Username">
            <input type="password" name="password" id="password" placeholder="Password">
            <p>
            <input type="submit" name="Login" value="Login">
            </p>
            <a href="">Forgot Password ?</a>
        </form>
        </div>
    </body>
    <script type ="text/javascript">
    function validasi() {
      var username = document.getElementById("username").placeholder;
      var password = document.getElementById("password").placeholder;
      if (username != "" && password != "") {
        return true;
      } else {
        alert("Anda harus mengisi username dan password dengan benar !");
      }
    }
    </script>
</html>