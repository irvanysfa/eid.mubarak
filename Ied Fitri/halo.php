<!DOCTYPE html>
<html>
<head>
	<title>Ucapan Selamat Datang</title>
</head>
<body>
	<h1>Selamat Datang!</h1>
	<p>Halo <span id="nama"></span>, terima kasih telah mengunjungi website kami.</p>

	<script>
		// Mengambil nama dari pengguna yang dimasukkan pada awal running program
		var nama = prompt("Masukkan nama Anda:");

		// Menampilkan nama pada halaman HTML
		var namaSpan = document.getElementById("nama");
		namaSpan.innerHTML = nama;
	</script>
</body>
</html>
