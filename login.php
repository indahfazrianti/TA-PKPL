<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laundry Point Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="dist/css/login.css" rel="stylesheet">
    </head>
    <body>
    <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>LOGIN</h2>
        <h2>LAUNDRY POINT</h2>
        <div class="underline-title"></div>
      </div>
    
      <?php 
	      if(isset($_GET['pesan'])){
		     if($_GET['pesan']=="gagal"){
			    echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		      }
    	  }
	?>

      <form method="post" class="form" action="cek_login.php">
        <label for="user-email" style="padding-top:13px">&nbsp;Username</label>
        <input id="user-email" class="form-content" type="username" name="username" autocomplete="on" required />
        <div class="form-border"></div>
        <label for="user-password" style="padding-top:22px">&nbsp;Password</label>
        <input id="user-password" class="form-content" type="password" name="password" required />
        <div class="form-border"></div>

        <a href="" onclick="alert('SILAHKAN HUBUNGI ADMIN LAUNDRY POINT !!! ^_^');"><legend id="forgot-pass">Anda Lupa Password ?</legend></a>
        <button id="submit-btn" type="submit" name="submit" >LOGIN </button>
        <a href="" onclick="alert('SEGERA HUBUNGI ADMIN LAUNDRY POINT !!! ^_^');" id="signup">Belum Punya Akun ?</a>
        <button id="submit-btn2"><a href="index.php" id="signup2" >BERANDA</a></button>
      </form>
    </div>
  </div>
    </body>
</html>