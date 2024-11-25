<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Motor</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f9f9f9;
        }
        header {
            background: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
        }
        header h1 {
            margin: 0;
        }
        .container {
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input, 
        .form-group select, 
        .form-group button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-group button {
            background: #007bff;
            color: white;
            cursor: pointer;
            transition: background 0.3s;
        }
        .form-group button:hover {
            background: #0056b3;
        }
        .summary {
            margin-top: 20px;
            padding: 10px;
            background: #e9ecef;
            border-radius: 4px;
        }
        .error {
            color: red;
            margin-top: 5px;
            display: none;
        }
    </style>
</head>
<body>
    <header>
        <h1>Pemesanan Motor</h1>
        <p>Lengkapi detail pemesanan Anda di bawah ini</p>
    </header>
    <div class="container">
        <form id="orderForm">
            <div class="form-group">
                <label for="motor">Pilih Motor</label>
                <select id="motor" name="motor" required>
                    <option value="" disabled selected>-- Pilih Motor --</option>
                    <option value="Honda Beat">Honda Beat</option>
                    <option value="Yamaha NMAX">Yamaha NMAX</option>
                    <option value="Suzuki Nex II">Suzuki Nex II</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tanggalSewa">Tanggal Sewa</label>
                <input type="date" id="tanggalSewa" name="tanggalSewa" required>
            </div>
            <div class="form-group">
                <label for="tanggalKembali">Tanggal Kembali</label>
                <input type="date" id="tanggalKembali" name="tanggalKembali" required>
                <span class="error" id="dateError">Tanggal kembali harus lebih besar dari tanggal sewa</span>
            </div>
            <div class="form-group">
                <button type="submit">Pesan Motor</button>
            </div>
        </form>
        <div class="summary" id="summary" style="display: none;">
            <h3>Rincian Pemesanan</h3>
            <p id="motorName"></p>
            <p id="rentalPeriod"></p>
        </div>
    </div>

    <script>
        const form = document.getElementById('orderForm');
        const summary = document.getElementById('summary');
        const motorName = document.getElementById('motorName');
        const rentalPeriod = document.getElementById('rentalPeriod');
        const dateError = document.getElementById('dateError');

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            const motor = document.getElementById('motor').value;
            const tanggalSewa = document.getElementById('tanggalSewa').value;
            const tanggalKembali = document.getElementById('tanggalKembali').value;

            if (new Date(tanggalSewa) >= new Date(tanggalKembali)) {
                dateError.style.display = 'block';
                return;
            } else {
                dateError.style.display = 'none';
            }

            // Menampilkan ringkasan pemesanan
            motorName.textContent = `Motor: ${motor}`;
            rentalPeriod.textContent = `Periode Sewa: ${tanggalSewa} hingga ${tanggalKembali}`;
            summary.style.display = 'block';
        });
    </script>
</body>
</html>
