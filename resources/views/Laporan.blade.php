<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styleInclude.css') }}">
    <title>Layanan Rental Motor Tunas Baru</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            font-size: 14px;
            box-shadow: 0 2px 8px rgba(60, 99, 170, 0.17);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: rgb(130, 93, 231);
            color: white;
        }

        h1 {
            text-align: center;
            color: rgb(37, 26, 185);
        }

        .download {
            text-align: center;
            margin-top: 20px;
        }

        footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <a href="/kelola" class="nav-button">Kelola</a>
            <a href="/Konfirmasi" class="nav-button">Konfirmasi</a>
            <a href="/Laporan" class="nav-button active">Laporan Keuangan</a>
            <div class="dropdown">
                <a href="maintenance" class="nav-button">Maintenance</a>
                <div class="dropdown-content">
                    <button onclick="window.location.href='/input'">Input Jadwal</button>
                    <button onclick="window.location.href='/lihat'">Lihat Jadwal</button>
                </div>
            </div>
        </nav>
    </header>

    <h1>Laporan Keuangan</h1>

    <table id="laporan">
        <tr>
            <th>No</th>
            <th>Tanggal Pembayaran</th>
            <th>Nama Penyewa</th>
            <th>Jenis Motor</th>
            <th>Plat Motor</th>
            <th>Harga</th>
        </tr>
        <tr>
            <td>1</td>
            <td>20/10/2024</td>
            <td>Della</td>
            <td>Honda Genio</td>
            <td>AB 1111 UU</td>
            <td>75.000</td>
        </tr>
        <tr>
            <td>2</td>
            <td>18/10/2024</td>
            <td>Maria</td>
            <td>Honda Beat FI</td>
            <td>AB 1234 YZ</td>
            <td>75.000</td>
        </tr>
        <tr>
            <td>3</td>
            <td>18/10/2024</td>
            <td>Ari</td>
            <td>Honda Vario 125</td>
            <td>AB 3030 KK</td>
            <td>85.000</td>
        </tr>
        <tr>
            <td colspan="5">Total Pendapatan:</td>
            <td id="finalTotal"></td>
        </tr>
    </table>

    <div class="download">
        <button onclick="downloadReport()">Download</button>
    </div>

    <footer>
        <p>Hubungi kami: 081-233-689 | email@TunasBaru.com</p>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const table = document.getElementById("laporan");
            let total = 0;
            for (let i = 1; i < table.rows.length - 1; i++) {
                const hargaText = table.rows[i].cells[5].innerText;
                const harga = parseInt(hargaText.replace(/\./g, "")); // Hapus titik pemisah ribuan
                total += harga;
            }
            document.getElementById("finalTotal").innerText = total.toLocaleString("id-ID");
        });

        function downloadReport() {
            const table = document.getElementById("laporan");
            let csv = '';

            for (let i = 0; i < table.rows.length; i++) {
                let row = table.rows[i];
                let cells = Array.from(row.cells);
                csv += cells.map(cell => `"${cell.innerText}"`).join(",") + "\n";
            }

            const blob = new Blob([csv], { type: 'text/csv' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'Laporan_Keuangan.csv';
            a.click();
        }
    </script>
</body>

</html>
