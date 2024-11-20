<?php

$folderPath = 'D:\ProjectPI_Motor\public\images'; // Ganti dengan path folder tempat gambar disimpan

// Membuka folder
if ($handle = opendir($folderPath)) {
    // Looping melalui semua file dalam folder
    while (false !== ($file = readdir($handle))) {
        // Mengecek apakah file tersebut adalah gambar (dengan ekstensi yang diinginkan)
        if ($file != '.' && $file != '..' && in_array(strtolower(pathinfo($file, PATHINFO_EXTENSION)), ['jpg', 'jpeg', 'png', 'gif'])) {
            // Menampilkan gambar dengan tag <img>
            echo '<img src="' . $folderPath . '/' . $file . '" alt="' . $file . '" style="max-width: 200px; margin: 10px;">';
        }
    }
    // Menutup folder setelah selesai
    closedir($handle);
} else {
    echo 'Folder tidak ditemukan atau tidak dapat diakses.';
}

?>
