<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Help</title>
  <style>
      .input-container {
          margin-bottom: 20px;
      }
      .input-container input {
          padding: 10px;
          width: 500px;
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
            <a href="/Help" class="nav-button">Help</a>
            <a href="/daftarPenyewaan" class="nav-button">Daftar Motor</a>
            <a href="/Riwayat" class="nav-button active">Riwayat Penyewaan</a>
            <a href="/login" class="nav-button">Log Out</a>
        </nav>
  </header>

<div class="input-container">
  <input type="text" id="query" placeholder="Silakan Ketik pertanyaan anda">
  <button onclick="cariPertanyaan()">Cari</button>
</div>

<div class="rekomendasi">
  <h3>Rekomendasi Pertanyaan:</h3>
  <ul>
      <li onclick="tampilkanJawaban('Apa saja motor yang tersedia untuk disewa?')">Apa saja motor yang tersedia untuk disewa?</li>
      <li onclick="tampilkanJawaban('Bagaimana cara melakukan pembayaran?')">Bagaimana cara melakukan pembayaran?</li>
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

</body>
</html>