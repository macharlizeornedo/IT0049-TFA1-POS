<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About</title>

    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>

<body>
    <nav class="navbar">
        <div class="nav-brand">POS System</div>

        <div class="nav-links">
            <a href="<?= base_url('/') ?>">Home</a>
            <a href="<?= base_url('about') ?>">About</a>
            <a href="<?= base_url('customers') ?>">Customers</a>
            <a href="<?= base_url('users') ?>">Users</a>
        </div>
    </nav>

    <main>
        <h1>About Our POS System</h1>

        <p>
            This project is a basic Point-of-Sale website created using
            CodeIgniter 4.
        </p>

        <p>
            It contains a landing page, an About page, a Customer Accounts page,
            and a User Accounts page. The customer and user records currently
            come from static PHP arrays, so the application does not use a
            database yet.
        </p>

        <p>
            This version of the project focuses on understanding how routes
            connect browser requests to controller methods and how controllers
            send data to views.
        </p>
    </main>
</body>

</html>