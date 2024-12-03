<html lang="id">
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styleInclude.css') }}">
    <title>Layanan Rental Motor Tunas Baru</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        .form-container {
            background: rgb(175, 3, 3);
            padding: 2em;
            margin: 2em 0;
            box-shadow: 0 0 10px rgb(248, 245, 245);
            color: white;
            background-color: #6f99df;
        }

        label,
        input,
        select,
        button {
            color: #f7f1f1(14, 13, 13);
        }

        input[type="submit"],
        button {
            color: white;
            background-color: #6f99df;
            border: none;
            padding: 0.5em 1em;
            cursor: pointer;
        }

        button:hover {
            background: #583bb5;
        }

        .container {
            padding: 20px;
        }

        .add-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 180px;
            padding: 10px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .card img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .card h3 {
            font-size: 16px;
            margin: 10px 0;
        }

        .card p {
            color: gray;
            font-size: 14px;
        }

        .card .price {
            font-size: 16px;
            font-weight: bold;
            color: #d32f2f;
        }

        .card .actions {
            margin-top: 10px;
            display: flex;
            justify-content: space-between;
        }

        .card button {
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        .delete-button {
            background-color: #f7f1f1;
            color: white;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        #kelola {
            padding: 20px;
        }

        .blur {
            filter: blur(5px);
            transition: filter 0.3s;
        }

        .edit-button {
            background-color: #3d80e4;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .edit-button:hover {
            background-color: #2c66b8;
        }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .modal.show {
            display: flex;
        }

        .modal-content {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 370px;
            max-width: 600px;
        }

        .motor-image img {
            width: 100%;
            height: auto;
            max-height: 200px;
            border-radius: 10px;
        }

        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 5px 0;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        .modal-footer {
            text-align: right;
            margin-top: 20px;
        }

        .modal-footer button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            margin-left: 10px;
        }

        .modal-footer .cancel-button {
            background-color: #d9534f;
            color: white;
        }

        .modal-footer .save-button {
            background-color: #5cb85c;
            color: white;
        }

        .btn-trash {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
            background-color: #3498db;
            /* Warna biru */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-trash:hover {
            background-color: #2980b9;
            /* Warna biru lebih gelap saat hover */
        }

        .btn-trash i {
            font-size: 18px;
        }

        .btn-trash {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
            background-color: #3498db;
            /* Warna biru */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: -10px;
            /* Sesuaikan nilainya sesuai kebutuhan */
            /* Atau gunakan transform untuk lebih presisi */
            transform: translateY(-10px);
        }

        .btn-trash:hover {
            background-color: #2980b9;
            /* Warna biru lebih gelap saat hover */
        }

        .btn-trash i {
            font-size: 18px;
        }
    </style>

</head>

<body>
    <header>
        <nav>
            <a href="/kelola" class="nav-button active" >Kelola</a>
            <div class="dropdown">
                <a class="nav-button">Maintenance</a>
                <div class="dropdown-content">
                    <button onclick="window.location.href='/input'">Input Jadwal</button>
                    <button onclick="window.location.href='/lihat'">Lihat Jadwal</button>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <section>
            <button class="add-button" onclick="window.location.href='/tambah';">+ Tambah Motor</button>

            <div class="motor-list">
                @foreach ($motors as $item)
                <div class="motor-item">
                    <img src="data:image/jpeg;base64,{{ base64_encode($item->fotoMotor) }}" alt="{{ $item->jenisMotor }}" width: 100px;>
                    <h3>{{ $item->jenisMotor }}</h3>
                    <p>Harga: Rp {{ number_format($item->harga, 0, ',', '.') }}/hari</p>
                    <div class="actions">
                        <div id="kelola">
                            <button class="btn-trash edit-button" id="editButton">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn-trash">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div id="editModal" class="modal">
                <div class="modal-content">
                    <h2>Edit Deskripsi Motor</h2>
                    <div class="motor-image">
                        <img src="{{ asset('images/home.jpg') }}" alt="Motor">
                    </div>
                    <p><strong>Jenis Motor:</strong> <input type="text" placeholder="Masukkan jenis motor"></p>
                    <p><strong>No. Plat:</strong> <input type="text" placeholder="Masukkan nomor plat"></p>
                    <p><strong>Harga:</strong> <input type="text" placeholder="Masukkan harga"></p>
                    <div class="modal-footer">
                        <button type="button" class="cancel-button" id="closeModal">Batal</button>
                        <button type="submit" class="save-button">Simpan</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <br><br><br><br><br><br>
    <footer>
        <p>Hubungi kami: 081-233-689 | email@TunasBaru.com</p>
    </footer>
    <script>
        const kelola = document.getElementById('kelola');
        const editButton = document.getElementById('editButton');
        const editModal = document.getElementById('editModal');
        const closeModal = document.getElementById('closeModal');

        // Tampilkan modal saat tombol Edit diklik
        editButton.addEventListener('click', () => {
            kelola.classList.add('blur'); // Tambahkan efek blur
            editModal.classList.add('show'); // Tampilkan modal
        });

        // Tutup modal saat tombol Batal diklik
        closeModal.addEventListener('click', () => {
            kelola.classList.remove('blur'); // Hilangkan efek blur
            editModal.classList.remove('show'); // Sembunyikan modal
        });
    </script>
</body>

</html>