<!DOCTYPE html>
<html lang="en">
<head>
	<title>SYIENTA - LOGIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets-root/assets-login/images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets-root/assets-login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets-root/assets-login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets-root/assets-login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets-root/assets-login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets-root/assets-login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets-root/assets-login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets-root/assets-login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets-root/assets-login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets-root/assets-login/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets-root/assets-login/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="proses_login.php" method="post">
					<span class="login100-form-title p-b-43">
						Selamat <span id="ucapan">Datang Kembali</span>
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: username">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
						<span class="label-input100">Username</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<!-- <div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div> -->
					</div>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" href="index.php" type="submit" value="Login">
							Login
                            <?php
                            if (isset($_SESSION['login_gagal'])) {
                                echo '<div class="alert alert-warning" role="alert">';
                                echo $_SESSION['login_gagal'];
                                echo '</div> ';
                                session_unset();
                            }
                            ?>
						</button>
					</div>
					
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							Quotes hari ini
						</span>
					</div>

					<div class="login100-form-social flex-c-m">
						<!-- <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a> -->

						<span class="txt3">
							" <span id="q1">Text disini</span> "
						</span>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('assets-root/assets-login/images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="assets-root/assets-login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets-root/assets-login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets-root/assets-login/vendor/bootstrap/js/popper.js"></script>
	<script src="assets-root/assets-login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets-root/assets-login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets-root/assets-login/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets-root/assets-login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets-root/assets-login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets-root/assets-login/js/main.js"></script>

	<script>
		var texts = [   
			"Marhaban ya Ramadhan! Semoga kedatanganmu membawa cahaya keimanan dan ketaqwaan dalam hati kita semua. Amin.",
			"Dengan rasa syukur yang mendalam, mari kita sambut Ramadhan dengan hati yang lapang dan niat untuk menjadi lebih baik.",
			"Bulan penuh berkah ini menjadi pengingat untuk saling memaafkan. Mohon maaf lahir dan batin atas segala khilaf dan salah. Selamat menunaikan ibadah puasa.",
			"Semoga di bulan suci ini, kita dimampukan untuk menjalankan ibadah puasa dengan penuh keikhlasan dan meraih ampunan-Nya.",
			"Indahnya berbagi di bulan Ramadhan. Semoga setiap kebaikan yang kita lakukan dilipatgandakan pahalanya oleh Allah SWT.",
			"Mari perbanyak tilawah dan tadarus Al-Qur'an di bulan suci ini. Semoga cahaya Al-Qur'an menerangi hati dan kehidupan kita.",
			"Suara azan dan lantunan tartil Al-Qur'an menjadi irama Ramadhan yang dirindukan. Selamat menyambut bulan suci berkah.",
			"Semoga Allah SWT memudahkan dan memberikan keberkahan bagi kita semua dalam menjalankan ibadah puasa di bulan Ramadhan.",
			"Ramadhan menjadi kesempatan untuk belajar bersabar dan mensyukuri nikmat Allah SWT yang tak terhingga.",
			"Semoga di bulan Ramadhan ini, doa-doa kita dikabulkan dan amal saleh kita diterima oleh Allah SWT.",
			"Selamat menyambut Ramadhan, bulan penuh berkah dan ampunan. Semoga kita semua dapat menjalankan ibadah dengan sebaik-baiknya.",
			"Alhamdulillah, bulan penuh berkah segera tiba! Mari kita buka hati dan bersiap menyambut Ramadhan dengan penuh keikhlasan.",
			"Ramadhan, bulan penuh ampunan dan keberkahan. Semoga kita semua bisa menjalankan ibadah puasa dengan lancar dan penuh khusyuk.",
			"Mari perbanyak tilawah, sedekah, dan perbanyak amal kebaikan di bulan suci ini. Semoga Allah SWT menerima semua amalan kita.",
			"Ramadhan menjadi momen untuk mempererat silaturahmi. Mari jalin silaturahmi dengan sanak saudara dan kerabat, saling mendoakan dan berbagi kebahagiaan.",
			"Marhaban Ya Ramadhan! Semoga Allah SWT memudahkan dan memberkahi ibadah kita di bulan suci ini.",
			"Semoga di bulan penuh berkah ini, pintu taubat dan ampunan Allah SWT terbuka lebar bagi kita semua.",
			"Mari kita saling berbagi dan membantu sesama, khususnya kepada yang membutuhkan, di bulan penuh berkah ini. Selamat menyambut Ramadhan 2024.",
			"Ramadhan membawa hikmah dan pelajaran berharga. Semoga kita bisa mengamalkannya dalam kehidupan sehari-hari.",
			"Ya Allah, jadikanlah Ramadhan kali ini sebagai momen untuk meningkatkan ketakwaan kami kepada-Mu. Selamat berpuasa!"
		];
	
		function quotation(id, text) {
			var q = document.getElementById(id);
			if (q) q.innerHTML = text;
		}
		quotation('q1', value = texts[Math.floor(Math.random() * texts.length)]);
	</script>

	<!-- UCAPAN SELAMAT MALAM SORE PAGI -->
	<script>
		function ucapanWaktu() {
			var waktu = new Date().getHours();
			var ucapan;
	
			if (waktu >= 0 && waktu < 12) {
				ucapan = "Pagi!";
			} else if (waktu >= 12 && waktu < 18) {
				ucapan = "Siang!";
			} else {
				ucapan = "Malam!";
			}
	
			return ucapan;
		}
	
		// Memperbarui teks di elemen dengan id "ucapan" dengan ucapan waktu
		document.getElementById("ucapan").innerText = ucapanWaktu();
	</script>

</body>
</html>