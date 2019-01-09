<html lang="en">
<head>
  <title>Form Login</title>
  <style>
    html, body, h1, logbox{
      margin: 0;
      padding: 0;
      font-family: sans-serif;
    }
    body{
      background-image: url("img/login.jpg");
      background-position: center;
      background-attachment: fixed;
      background-size: cover;

    }
    .logbox{
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 350px;
      height: 300px;
      padding: 10px 40px;
      box-sizing: border-box;
      background: rgba(0, 0, 0, 0.7);
      border-radius:10px;
    }
    h1{
      margin: 10;
      padding-top: 30px;
      padding-bottom: 20px;
      color: white;
      text-align: center;
    }
    h3{
      margin: 10;
      padding-top: 20px;
      padding-bottom: 20px;
      color: white;
      text-align: center;
    }
    .logbox p{
      margin: 0;
      padding: 0;
      color: #fff;
    }
    .logbox input{
      width: 100%;
      margin-bottom: 20px;
    }
    .logbox input[ type="text"]
    {
      border: none;
      border-bottom: 1px solid #fff;
      background: transparent;
      outline: none;
      height: 30px;
      color: #fff;
    }
    .logbox input[ type = "password"]
    {
      border: none;
      border-bottom: 1px solid #fff;
      background: transparent;
      outline: none;
      height: 30px;
      color: #fff;
    }
    #sub{
      border: none;
      outline: none;
      padding: 10px 110px 10px 110px;
      text-align: center;
      color: #fff;
      font-size: 18px;
      background: #66ff66;
      cursor: pointer;
      border-radius: 20px;
      text-decoration: none;
    }
</style>
</head>
<body>
    <div class="logbox">
    <?php
        ob_start();
        session_start();
        ob_end_clean();
        if(isset($_SESSION["username"])) {
        echo "<br><h1>BERHASIL</h1>";
        echo "<h3><a href='logout.php'><br>Logout</a></h3>";
        } else {
        echo header("location:form_login.php");
        }
    ?>
    </div>
</body>
</html>