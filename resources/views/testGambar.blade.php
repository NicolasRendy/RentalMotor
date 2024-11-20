<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Motor</title>
</head>
<body>
    <h1>Daftar Motor</h1>
    <form action="{{ route('motors.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="noPlat">Nomor Plat:</label>
        <input type="text" name="noPlat" id="noPlat" required>
        <label for="gambar">Gambar:</label>
        <input type="file" name="fotoMotor" id="fotoMotor" required>
        <button type="submit">Tambah Motor</button>
    </form>
    <h2>List Motor</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>No Plat</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($motors as $motor)
                <tr>
                    <td>{{ $motor->id }}</td>
                    <td>{{ $motor->noPlat }}</td>
                    <td>
                        <img src="data:image/jpeg;base64,{{ base64_encode($motor->fotoMotor) }}" alt="Gambar Motor" style="width: 100px;">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
