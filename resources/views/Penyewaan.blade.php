<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Penyewaan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
        }

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

        .back-button {
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
            color: white;
            padding: 5px 10px;
        }

        .penyewaan-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .penyewaan-card {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .motor-image img {
            border-radius: 10px;
            width: 300px;
            height: 230px;
            border: 3px solid #e0e0e0;
        }

        .info {
            text-align: left;
            background-color: #dce5f4;
            padding: 15px;
            border-radius: 10px;
            flex-grow: 1;
        }

        .info p {
            margin: 5px 0;
        }

        .kirim-button {
            background-color: #3d80e4;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .kirim-button:hover {
            background-color: #2c66b8;
        }

        footer {
            background-color: #6f99df;
            color: white;
            text-align: center;
            padding: 0px;
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 45px;
        }

        input[type="date"] {
            appearance: none;
            /* Hapus tampilan default browser */
            -webkit-appearance: none;
            -moz-appearance: none;

            padding: 10px;
            font-size: 16px;
            font-family: Arial, sans-serif;
            border: 2px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
            color: #333;
            transition: border-color 0.3s, box-shadow 0.3s;
            width: 100%;
            max-width: 300px;
            box-sizing: border-box;
        }

        /* Hover dan fokus untuk efek interaksi */
        input[type="date"]:hover {
            border-color: #aaa;
        }

        input[type="date"]:focus {
            outline: none;
            border-color: #5b9bd5;
            box-shadow: 0 0 5px rgba(91, 155, 213, 0.5);
        }

        /* Tambahkan ikon kalender (opsional) */
        input[type="date"]::-webkit-calendar-picker-indicator {
            cursor: pointer;

            background-size: 20px 20px;
            border: none;
            opacity: 0.7;
        }
    </style>
</head>

<body>
    <header class="header">
        <button class="back-button">&lt;</button>
        <h1>Detail Penyewaan</h1>
    </header>
    <div class="penyewaan-container">
        <div class="penyewaan-card">
            <div class="motor-image">

                <img src="data:image/jpeg;base64,{{ base64_encode($motor->fotoMotor) }}" alt="{{ $motor->jenisMotor }}">
            </div>
            <div class="info">
                <p><strong>Nama:</strong> {{ session('nama') }}</p>
                <p><strong>Alamat:</strong> {{ session('alamat') }}</p>
                <p><strong>Jenis Motor:</strong> {{ $motor->jenisMotor }}</p>
                <p><strong>No. Plat:</strong> {{ $motor->noPlat }}</p>
                <form method="POST" action="/menyewaProses">
                    @csrf
                    <label for="tanggal_pengambilan"><strong>Tanggal Pengambilan:</strong></label>
                    <input type="date" name="tanggal_pengambilan" id="tanggal_pengambilan" required>
                    <span id="error-tanggal-pengambilan" style="color: red; font-size: 0.9em; display: none;">Tanggal pengambilan tidak boleh kurang dari hari ini.</span>
                    <br>

                    <label for="tanggal_pengembalian"><strong>Tanggal Pengembalian:</strong></label>
                    <input type="date" name="tanggal_pengembalian" id="tanggal_pengembalian" required>
                    <span id="error-tanggal" style="color: red; font-size: 0.9em; display: none;">Tanggal pengembalian tidak boleh kurang dari tanggal pengambilan.</span>
                    <br>

                    <p><strong>Harga per Hari:</strong> Rp. <span id="harga_per_hari">{{ $motor->harga }}</span></p>

                    <p><strong>Total Harga:</strong> Rp. <span id="total_harga">0</span></p>

                    <input type="hidden" name="kodeMotor" value="{{ $motor->kodeMotor }}">
                    <input type="hidden" name="id_Pelanggan" value="{{ session('id_pelanggan') }}">
                    <input type="hidden" name="total_harga" id="total_harga_input">

                    <button type="submit" class="kirim-button">Kirim</button>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <p>Hubungi kami: 081-233-689 | email@TunasBaru.com</p>
    </footer>

    <script>
        // Ambil elemen input tanggal, total harga, dan elemen error
        const tanggalPengambilan = document.getElementById('tanggal_pengambilan');
        const tanggalPengembalian = document.getElementById('tanggal_pengembalian');
        const totalHargaEl = document.getElementById('total_harga');
        const hargaPerHari = parseInt(document.getElementById('harga_per_hari').textContent);
        const errorTanggal = document.getElementById('error-tanggal');
        const errorTanggalPengambilan = document.getElementById('error-tanggal-pengambilan');

        // Fungsi untuk validasi tanggal pengambilan
        function validasiTanggalPengambilan() {
            const tglPengambilan = new Date(tanggalPengambilan.value);
            const hariIni = new Date();
            hariIni.setHours(0, 0, 0, 0); // Set waktu ke 00:00 untuk perbandingan yang tepat

            if (tglPengambilan && tglPengambilan < hariIni) {
                // Tampilkan pesan error
                errorTanggalPengambilan.style.display = "block";

                // Hapus nilai pada field tanggal pengambilan
                tanggalPengambilan.value = "";
            } else {
                // Sembunyikan pesan error jika valid
                errorTanggalPengambilan.style.display = "none";
            }
        }

        // Fungsi untuk menghitung total harga
        // Fungsi untuk menghitung total harga
        function hitungTotalHarga() {
            validasiTanggalPengambilan(); // Validasi tanggal pengambilan

            const tglPengambilan = new Date(tanggalPengambilan.value);
            const tglPengembalian = new Date(tanggalPengembalian.value);

            if (tglPengambilan && tglPengembalian) {
                if (tglPengembalian < tglPengambilan) {
                    // Tampilkan pesan error untuk tanggal pengembalian
                    errorTanggal.style.display = "block";

                    // Hapus nilai pada field tanggal pengembalian
                    tanggalPengembalian.value = "";

                    // Reset total harga
                    totalHargaEl.textContent = "0";
                } else {
                    // Sembunyikan pesan error untuk tanggal pengembalian
                    errorTanggal.style.display = "none";

                    // Hitung selisih hari antara tanggal pengambilan dan pengembalian
                    const diffTime = Math.abs(tglPengembalian - tglPengambilan);
                    const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)) + 1; // Ditambah 1 untuk inklusif

                    // Hitung total harga
                    const totalHarga = diffDays * hargaPerHari;
                    totalHargaEl.textContent = totalHarga.toLocaleString(); // Format total harga dengan pemisah ribuan

                    // Update nilai total_harga pada input hidden
                    document.getElementById('total_harga_input').value = totalHarga;
                }
            }
        }


        // Menambahkan event listener untuk perubahan pada input tanggal
        tanggalPengambilan.addEventListener('change', hitungTotalHarga);
        tanggalPengembalian.addEventListener('change', hitungTotalHarga);
    </script>
</body>

</html>