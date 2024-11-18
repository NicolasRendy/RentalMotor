<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help</title>
    <style>
        .header {
            display: flex;
            align-items: center;
            padding: 10px 20px;
            background-color: #6f99df;
            width: 100%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 120px;
            height: 20px;
        }

        .header h1 {
            flex-grow: 1;
            margin: 0;
            color: white;
            text-align: left;
        }

        .input-container {
            margin-bottom: 20px;
        }
        .input-container input {
            padding: 10px;
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .input-container button {
            padding: 10px;
            margin-left: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .input-container button:hover {
            background-color: #45a049;
        }

        .rekomendasi {
            margin-top: 20px;
        }
        .rekomendasi ul {
            list-style-type: none;
            padding: 0;
        }
        .rekomendasi li {
            margin: 10px 0;
            cursor: pointer;
            color: #007BFF;
        }
        .rekomendasi li:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<header>
        <nav>
            <a href="/home" class="nav-button">Home</a>
            <a href="/layanan" class="nav-button">Melihat Layanan</a>
            <a href="/login" class="nav-button">Login</a>
            <a href="/registrasi" class="nav-button">Registrasi</a>
            <a href="/Help" class="nav-button active">Help</a> 
        </nav>
    </header>

<?php
function tampilkan_help() {
    $help_text = "
    <h2>Selamat datang di Sistem Rental Motor!</h2>
    <p>Sistem ini memiliki tiga peran utama:</p>
    <ul>
        <li><strong>Admin</strong>: Mengelola motor yang tersedia dan melihat laporan transaksi.</li>
        <li><strong>Pengunjung</strong>: Melihat motor yang tersedia dan informasi harga.</li>
        <li><strong>User (Member)</strong>: Menyewa motor dan melakukan pembayaran.</li>
    </ul>

    <h3>Fungsi yang tersedia untuk setiap peran:</h3>
    <h4>1. Admin:</h4>
    <ul>
        <li><strong>Kelola Motor</strong>: Menambah, mengedit, atau menghapus motor yang tersedia untuk disewa.</li>
        <li><strong>Lihat Transaksi</strong>: Melihat daftar transaksi penyewaan motor oleh pengguna.</li>
        <li><strong>Kelola Pengguna</strong>: Mengelola data pengguna (user/member) yang terdaftar.</li>
    </ul>

    <h4>2. Pengunjung:</h4>
    <ul>
        <li><strong>Lihat Motor</strong>: Melihat daftar motor yang tersedia untuk disewa beserta harga dan deskripsi.</li>
        <li><strong>Pendaftaran</strong>: Mendaftar menjadi member agar bisa menyewa motor.</li>
        <li><strong>Login</strong>: Masuk sebagai member setelah pendaftaran.</li>
    </ul>

    <h4>3. User (Member):</h4>
    <ul>
        <li><strong>Sewa Motor</strong>: Memilih motor yang tersedia dan menyewa untuk periode tertentu.</li>
        <li><strong>Lihat Transaksi</strong>: Melihat riwayat penyewaan motor yang pernah dilakukan.</li>
        <li><strong>Pembayaran</strong>: Melakukan pembayaran untuk transaksi penyewaan motor.</li>
    </ul>

    <h3>Fitur lain:</h3>
    <ul>
        <li><strong>Bantuan</strong>: Menampilkan panduan penggunaan sistem. Cukup klik tombol 'Bantuan' untuk melihat informasi ini.</li>
        <li><strong>Keluar</strong>: Keluar dari sistem.</li>
    </ul>

    <h3>Cara menggunakan sistem:</h3>
    <ul>
        <li>Untuk <strong>admin</strong>, ketik perintah untuk mengelola motor dan transaksi.</li>
        <li>Untuk <strong>pengunjung</strong>, bisa melihat daftar motor atau mendaftar menjadi member.</li>
        <li>Untuk <strong>user/member</strong>, pilih motor yang ingin disewa dan lakukan pembayaran.</li>
    </ul>

    <p>Silakan pilih peran dan fungsi yang ingin digunakan sesuai dengan kebutuhan Anda.</p>
    ";

    echo $help_text;
}

?>

<div class="input-container">
    <input type="text" id="query" placeholder="Silakan Ketik pertanyaan anda">
    <button onclick="cariPertanyaan()">Cari</button>
</div>

<div class="rekomendasi">
    <h3>Rekomendasi Pertanyaan:</h3>
    <ul>
        <li onclick="tampilkanJawaban('Bagaimana cara mendaftar menjadi member?')">Bagaimana cara mendaftar menjadi member?</li>
        <li onclick="tampilkanJawaban('Apa saja motor yang tersedia untuk disewa?')">Apa saja motor yang tersedia untuk disewa?</li>
        <li onclick="tampilkanJawaban('Bagaimana cara melakukan pembayaran?')">Bagaimana cara melakukan pembayaran?</li>
        <li onclick="tampilkanJawaban('Apa keuntungan menjadi member?')">Apa keuntungan menjadi member?</li>
    </ul>
</div>

<script>
    function cariPertanyaan() {
        const query = document.getElementById("query").value;
        if(query) {
            alert("Mencari jawaban untuk pertanyaan: " + query);
        } else {
            alert("Harap masukkan pertanyaan!");
        }
    }

    function tampilkanJawaban(pertanyaan) {
        alert("Menampilkan jawaban untuk: " + pertanyaan);
    }
</script>

<?php
tampilkan_help();
?>

</body>
</html>
