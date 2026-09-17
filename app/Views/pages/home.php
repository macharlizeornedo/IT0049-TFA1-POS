<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>POS Home</title>

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
        <h1>Point-of-Sale System</h1>

        <p>
            Welcome to our basic POS application. This website demonstrates how
            routes, controllers, views, and static arrays work together in
            CodeIgniter 4.
        </p>

        <p>
            Use the navigation menu to learn about the project or view the
            customer and user accounts.
        </p>
    </main>
</body>

</html>