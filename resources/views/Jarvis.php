<!DOCTYPE html>
<html lang="id">
<head>
    <!-- Menentukan charset dan viewport agar situs web responsif dan mendukung berbagai karakter -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>PERKENALAN</title>
    
    <style>
        /* Mengatur tampilan dasar untuk body agar elemen terpusat secara vertikal dan horizontal */
        body {
            font-family: Arial, sans-serif;
            background-color: #778da9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Mengatur tampilan elemen dengan kelas .intro */
        .intro {
            background-color: #e0e1dd;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            margin: 20px auto;
            width: 100%;
            max-width: auto; /* Maksimal lebar elemen adalah auto */
        }

        /* Mengatur tampilan elemen h1 dalam kelas .intro */
        .intro h1 {
            font-size: 3rem;
            color: #0d1b2a;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        /* Mengatur tampilan elemen p dalam kelas .intro */
        .intro p {
            font-size: 1.5rem;
            color: #0d1b2a;
        }

        /* Menambahkan media query untuk menyesuaikan tampilan pada layar yang lebih kecil */
        @media (max-width: 768px) {
            .intro h1 {
                font-size: 2.5rem;
            }
            .intro p {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <div class="intro">
        <?php
            // Menampilkan pesan perkenalan menggunakan PHP
            echo "<h1>Hello, Nama saya Marwan Wisnu!</h1>";
            echo "<p>Saya Bersekolah Di SMKN 26 JAKARTA.</p>";
            echo "<p>Saya Bercita-cita Menjadi Cloud Engineer.</p>";
        ?>
    </div>
</body>
</html>
