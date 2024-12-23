<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Utama</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f0fa;
            margin: 0;
            padding: 0;
            color: #4b0082;
        }

        /* Bagian Header */
        header {
            background-color: #6a1b9a;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        header h1 {
            font-size: 36px;
            margin: 0;
            letter-spacing: 2px;
        }

        /* Menu Utama */
        .menu-container {
            text-align: center;
            margin-top: 60px;
        }

        .menu-container h1 {
            font-size: 32px;
            color: #7a5c8b;
            margin-bottom: 40px;
        }

        .menu-button {
            display: inline-block;
            background-color: #7a5c8b;
            color: white;
            padding: 16px 32px;
            margin: 15px;
            font-size: 18px;
            text-decoration: none;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .menu-button:hover {
            background-color: #6a4e7a;
            box-shadow: 0 8px 10px rgba(0, 0, 0, 0.2);
            transform: translateY(-3px);
        }

        .menu-button:active {
            background-color: #5c3f6d;
            transform: translateY(2px);
        }

        .menu-button i {
            margin-right: 8px;
        }

        /* Formulir Pendaftaran */
        .form-container {
            width: 50%;
            margin: 40px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
            color: #7a5c8b;
        }

        /* Responsif untuk layar kecil */
        @media (max-width: 768px) {
            .menu-container h1 {
                font-size: 28px;
            }

            .menu-button {
                font-size: 16px;
                padding: 12px 24px;
            }

            .form-container {
                width: 90%;
            }
        }
    </style>
</head>
<body>

    <!-- Bagian Header -->
    <header>
        <h1>Sistem Informasi Class Meeting</h1>
    </header>

    <!-- Bagian Menu Utama -->
    <div class="menu-container">
        <h1>Selamat Datang di Sistem Informasi Class Meeting</h1>
        <a href="admin/admin_login.php" class="menu-button">
            <i class="fa fa-user-shield"></i> Masuk sebagai Admin
        </a>
        <a href="Pimpinan/login.php" class="menu-button">
            <i class="fa fa-users-cog"></i> Login Pimpinan
        </a>
        <a href="pendaftaran/form_pendaftaran.html" class="menu-button">
            <i class="fa fa-pencil-alt"></i> Formulir Pendaftaran Peserta
        </a>
    </div>

</body>
</html>
