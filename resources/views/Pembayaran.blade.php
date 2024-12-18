<html lang="id">
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="{{ asset('css/styleInclude.css') }}">
    <title>Riwayat Penyewaan</title>
    <style>
        .container {
            width: 500%;
            margin: 50px auto;
            display: flex;
            justify-content: center;
            overflow: hidden;
            background-color: #ffffff;
            /* Latar belakang putih untuk kotak */
            border-radius: 8px;
            /* Sudut kotak yang melengkung */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Bayangan halus di sekitar kotak */
            padding: 20px;
            width: 450px;
        }

        .title {
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            align-items: center;
        }

        .total-price {
            background-color: #e0e0ff;
            border-radius: 5px;
            padding: 10px;
            display: inline-block;
            margin-bottom: 20px;
            font-weight: bold;
            width: 270px;
            height: 20px;
        }

        .payment-methods {
            margin-top: 15px;
        }

        .payment-option {
            display: flex;
            align-items: center;
            background-color: #f5f5f5;
            border-radius: 10px;
            padding: 10px 15px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 10px;
            transition: transform 0.2s, box-shadow 0.3s;
        }

        .payment-option:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .payment-option label {
            font-size: 1rem;
            margin-left: 10px;
        }

        .payment-option input[type="radio"] {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }

        .bank-options {
            display: none;
            margin-top: 15px;
        }

        .bank-options label {
            display: block;
            margin: 5px 0;
            font-size: 0.9rem;
        }

        .btn-transfer {
            background-color: #6b4acc;
            color: white;
        }

        .btn-cash {
            background-color: #6bafff;
            color: white;
        }

        .details {
            margin-top: 20px;
            background-color: #e0e0ff;
            padding: 15px;
            border-radius: 8px;
            text-align: left;
            font-size: 0.9rem;
        }

        .details p {
            margin: 5px 0;
        }

        .pay-button-container {
            text-align: center;
            margin-top: 20px;
        }

        .pay-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .pay-button:hover {
            background: #583bb5;
        }
        
    </style>
</head>

<body>
    <header>
        <nav>
            <a href="/daftarPenyewaan" class="nav-button">Sewa</a>
            <a href="/Riwayat" class="nav-button">Riwayat Penyewaan</a>
            <a href="/Pembayaran" class="nav-button active"> Pembayaran</a>
            <form action="/logout" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="nav-button" style="background: none; border: none; color: inherit; cursor: pointer;">
                    Log Out
                </button>
            </form>
        </nav>
    </header>
    <div class="container">
        <section>
            <div class="title">Bayar Sekarang</div>
            <div class="details">
                <p><strong>Nama:</strong> Della</p>
                <p><strong>Alamat:</strong> Gedongkiwo</p>
                <p><strong>Jenis Motor:</strong> Honda Genio</p>
                <p><strong>No. Plat:</strong> AB 1111 UU</p>
                <p><strong>Tanggal Penyewaan:</strong> 20/10/2024</p>
                <p><strong>Tanggal Pengembalian:</strong> 21/10/2024</p>
            </div><br>
            <div class="total-price">Total Pesanan: Rp 75.000</div>
            <div class="payment-methods">
                <h3>Pilih metode pembayaran</h3>
                <div class="payment-option">
                    <input type="radio" id="cod" name="payment" value="cod" onclick="toggleBankOptions(false)">
                    <label for="cod">Bayar di Tempat</label>
                </div>
                <div class="payment-option">
                    <input type="radio" id="transfer" name="payment" value="transfer" onclick="toggleBankOptions(true)">
                    <label for="transfer">Transfer</label>
                </div>
                <div class="bank-options" id="bankOptions">
                    <label><input type="radio" name="bank" value="MANDIRI"> Mandiri</label>
                    <label><input type="radio" name="bank" value="BRIVA"> BRIVA</label>
                </div>
            </div>
            <div class="pay-button-container">
                <button class="pay-button" onclick="handlePayment()">Bayar Sekarang</button>
            </div>
        </section>
    </div>
    <script>
        function toggleBankOptions(show) {
            const bankOptions = document.getElementById("bankOptions");
            bankOptions.style.display = show ? "block" : "none";
        }

        function handlePayment() {
            const paymentMethod = document.querySelector('input[name="payment"]:checked');
            const bankOption = document.querySelector('input[name="bank"]:checked');

            if (!paymentMethod) {
                alert("Pilih metode pembayaran terlebih dahulu!");
                return;
            }

            if (paymentMethod.value === "cod") {
                window.location.href = "/Riwayat"; // Arahkan ke halaman/class sewa
            } else if (paymentMethod.value === "transfer") {
                if (!bankOption) {
                    alert("Pilih bank terlebih dahulu!");
                    return;
                }

                switch (bankOption.value) {
                    case "MANDIRI":
                        window.location.href = "/transferMandiri"; // Arahkan ke halaman/class untuk bank Mandiri
                        break;
                    case "BRIVA":
                        window.location.href = "/transferBriva"; // Arahkan ke halaman/class untuk bank BRIVA
                        break;
                    default:
                        alert("Bank yang dipilih tidak valid!");
                }
            }
        }
    </script><br><br>
    <footer>
        <p>Hubungi kami: 081-233-689 | email@TunasBaru.com</p>
    </footer>

</body>

</html>