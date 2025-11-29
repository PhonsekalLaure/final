<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?= base_url('public/assets/images/logo.png'); ?>">
    
    <link rel="stylesheet" href="<?= base_url('public/assets/css/auth.css'); ?>">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .auth-header {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 15px 0;
            margin-bottom: 30px;
        }

        .auth-header img {
            height: 50px;
            width: auto;
            object-fit: contain;
        }

        .auth-header .header-text h1 {
            margin: 0;
            font-size: 30px;
            font-weight: 700;
            color: #ffffffff;
            font-family: 'Cinzel', serif;
            text-align: left;
        }

        .auth-header .header-text p {
            margin: 0;
            font-size: 19px;
            color: #ffffffff;
            font-weight: 500;
        }

        @media (max-width: 576px) {
            .auth-header {
                gap: 10px;
                margin-bottom: 20px;
            }

            .auth-header img {
                height: 40px;
            }

            .auth-header .header-text h1 {
                font-size: 18px;
            }

            .auth-header .header-text p {
                font-size: 11px;
            }
        }
    </style>

    <title><?= esc($title); ?></title>
</head>

<body class="auth-page">
    <div class="auth-header">
        <img src="<?= base_url('public/assets/images/logo.png'); ?>" alt="ITSO Logo">
        <div class="header-text">
            <h1>IT Services Office</h1>
            <p>Equipment Management System</p>
        </div>
    </div>

