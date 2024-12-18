<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="{{ asset('css/styleInclude.css') }}">
    <title>Tambah Motor Baru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .header {
            background-color: #6f99df;
            color: white;
            padding: 10px;
            display: flex;
            align-items: center;
        }

        .header a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            margin-right: 10px;
        }

        .header span {
            font-size: 18px;
            font-weight: bold;
        }

        .container {
            margin: 20px auto;
            width: 80%;
            max-width: 800px;
            background-color: #87ceeb;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            color: white;
        }

        .form-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .upload-box {
            width: 200px;
            height: 200px;
            border: 2px dashed white;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            cursor: pointer;
            position: relative;
        }

        .upload-box:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .upload-box input[type="file"] {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }

        .form-inputs {
            display: flex;
            flex-direction: column;
            gap: 15px;
            background-color: #dce5f4;
            ;
            padding: 15px;
            border-radius: 10px;
            color: #333;
            flex: 1;
        }

        .form-section {
            display: flex;
            align-items: center;
            gap: 40px;
        }


        .form-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .form-row label {
            font-weight: bold;
            flex: 1;
        }

        .form-row input {
            flex: 2;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: white;
        }

        .submit-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            text-align: center;
            display: inline-block;
            margin-top: 20px;
            width: 100%;
        }

        .submit-button:hover {
            background: #583bb5;
        }
    </style>
</head>

<body>
    <div class="header">
        <a href="/kelola">&#9664;</a>
        <span>Tambah Motor Baru</span>
    </div>

    <div class="container">
        <form action="/TambahProses" method="POST" enctype="multipart/form-data">
            @csrf <!-- Untuk Laravel CSRF protection -->
            <div class="form-section">
                <div class="upload-box">
                    <img id="preview-image" src="#" alt="Preview"
                        style="display: none; width: 100%; height: 100%; object-fit: cover; border-radius: 10px;">
                    <span id="upload-placeholder">+</span>
                    <input type="file" name="fotoMotor" accept="image/*" id="fotoMotor">
                </div>
                <div class="form-inputs">
                    <div class="form-row">
                        <label for="jenis-motor">Jenis Motor</label>
                        <input type="text" id="jenis-motor" name="jenisMotor" placeholder="Masukkan jenis motor" required>
                    </div>
                    <div class="form-row">
                        <label for="no-plat">No. Plat</label>
                        <input type="text" id="noPlat" name="noPlat" placeholder="Masukkan nomor plat" required>
                    </div>
                    <div class="form-row">
                        <label for="harga">Harga</label>
                        <input type="text" id="Harga" name="Harga" placeholder="Masukkan harga" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="submit-button">Simpan</button>
        </form>
    </div>

    <script>
        const imageInput = document.getElementById('fotoMotor');
        const previewImage = document.getElementById('preview-image');
        const uploadPlaceholder = document.getElementById('upload-placeholder');

        imageInput.addEventListener('change', function(event) {
            const file = event.target.files[0]; // Ambil file yang diunggah
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImage.src = e.target.result; // Set gambar yang diunggah sebagai sumber
                    previewImage.style.display = 'block'; // Tampilkan elemen gambar
                    uploadPlaceholder.style.display = 'none'; // Sembunyikan placeholder
                };
                reader.readAsDataURL(file); // Baca file sebagai URL data
            }
        });
    </script>
</body>

</html>