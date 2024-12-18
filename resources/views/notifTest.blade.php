<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Notification</title>
</head>
<body>
    <h1>Notifikasi Browser</h1>
    <button id="notifyButton">Klik untuk Notifikasi</button>

    <script>
        // Mendapatkan referensi ke button
        const notifyButton = document.getElementById('notifyButton');

        // Fungsi untuk meminta izin dan mengirimkan notifikasi
        function sendNotification() {
            if (!("Notification" in window)) {
                alert("Browser Anda tidak mendukung notifikasi.");
            } else if (Notification.permission === "granted") {
                // Jika izin sudah diberikan
                new Notification("Halo!", {
                    body: "Ini adalah notifikasi dari website Bahwa motor dengan Plat NULL harus di Melakukan Pemeliharaan sekarang.",
                    icon: "https://via.placeholder.com/100"
                });
            } else if (Notification.permission !== "denied") {
                // Meminta izin notifikasi jika belum diminta
                Notification.requestPermission().then(permission => {
                    if (permission === "granted") {
                        new Notification("Halo!", {
                            body: "Terima kasih telah memberikan izin.",
                            icon: "https://via.placeholder.com/100"
                        });
                    }
                });
            }
        }

        // Menambahkan event listener ke button
        notifyButton.addEventListener("click", sendNotification);
    </script>
</body>
</html>
