<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/auth.css">
    <title> SIASDOS </title>
</head>


<body>
		<div class="hero">
			<div class="login-box">
				<div class="button-box">
					<div id="btn"></div>
					<button type="button" class="toggle-btn" onclick="login()">Log In</button>
					<button type="button" class="toggle-btn" onclick="register()">Register</button>
				</div>
				<div class="social-icons">
				<h2>SIASDOS</h2>
                <P>Sistem Informasi Perekrutan Asdos Jurusan Ilmu Komputer Universitas Lampung</P>
			</div>
				<form id="login" class="input-group" action="/login/action" method="POST">
					<input type="text" class="input-field" placeholder="NPM" required name="npm">
					<input type="password" class="input-field" placeholder="Password" required name="password">
					<button type="submit" class="submit-btn">Masuk</button>
				</form>
				<form id="register" class="input-group" action="/register/action" method="POST">
					<input type="text" class="input-field" placeholder="NPM" required name="npm">
					<input type="text" class="input-field" placeholder="Nama" required name="nama">
					<input type="password" class="input-field" placeholder="Password" required name="password">
					<button type="submit" class="submit-btn">Daftar</button>
				</form>
			</div>
		</div>
      
      

    
</body>
</html>
<script>
    var x=document.getElementById("login");
			var y=document.getElementById("register");
			var z=document.getElementById("btn");
			
			function register() {
				x.style.left = "-200px";
				y.style.left = "190px";
				z.style.left = "110px";
			}
			
			function login() {
				x.style.left = "190px";
				y.style.left = "-500px";
				z.style.left = "0";
			}
</script>