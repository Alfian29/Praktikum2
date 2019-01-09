<!DOCTYPE html>
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
      height: 320px;
      padding: 10px 40px;
      box-sizing: border-box;
      background: rgba(0, 0, 0, 0.77);
      border-radius:10px;
    }
    h1{
      margin: 10;
      padding-top: 20px;
      padding-bottom: 20px;
      color: white;
      text-align: center;
    }
    h3{
      margin: 10;
      padding-top: 5px;
      padding-bottom: 15px;
      color: red;
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
        <h1>Login</h1>
        <form method="post" action="cek_login.php">
          <p><input type="text" name="username" value="" placeholder="Username"></p>
          <p><input type="password" name="password" value="" placeholder="Password"></p>
          <p class="submit"><input type="submit" name="commit" value="Login" id="sub"></p>
        </form>
      <MARQUEE align="center" direction="left" height="200" scrollamount="10" width="100%">
        <?php 
        if(isset($_GET["login_error"])){
            echo "<h3>Username atau password yang Anda masukkan salah!</h3>";
        }
        ?>
      </MARQUEE>
    </div>
  </body>
</html> 