<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            background-color:  #87ceeb;
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
            background-color: #dce5f4;;
            padding: 15px;
            border-radius: 10px;
            color: #333;
            flex: 1;
        }

        .form-section {
            display: flex;
            align-items: center;
            gap: 40px; # edit posisi letak inpunya
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
        <a href="#">&#9664;</a>
        <span>Tambah Motor Baru</span>
    </div>

    <div class="container">
        <div class="form-section">
            <div class="upload-box">
                <span>+</span>
                <input type="file" accept="image/*">
            </div>

            <div class="form-inputs">
                <div class="form-row">
                    <label for="jenis-motor">Jenis Motor</label>
                    <input type="text" id="jenis-motor" placeholder="Masukkan jenis motor">
                </div>
                <div class="form-row">
                    <label for="no-plat">No. Plat</label>
                    <input type="text" id="no-plat" placeholder="Masukkan nomor plat">
                </div>
                <div class="form-row">
                    <label for="harga">Harga</label>    
                    <input type="text" id="harga" placeholder="Masukkan harga">
                </div>
            </div>
        </div>

        <button class="submit-button">Simpan</button>
    </div>
</body>
</html>
