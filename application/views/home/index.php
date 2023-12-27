<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>
<body>
    <header>
        <div class="container">
            <h1>Welcome to Our Foodie Paradise</h1>
            <nav>
                <ul>
                    <li><a href="<?= site_url('home'); ?>">Home</a></li>
                    <li><a href="<?= site_url('menu/show_menu'); ?>">Menu</a></li>
                    <li><a href="<?= site_url('login/logout'); ?>">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section>
        <div class="container">
            <h2>Featured Menus</h2>
            <?php if (!empty($menu)): ?>
                <ul>
                    <?php foreach ($menu as $item): ?>
                        <li>
                            <?= $item['name']; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>No menu available.</p>
            <?php endif; ?>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2023 Foodie Paradise. All rights reserved.</p>
        </div>
    </footer>
    <script src="<?= base_url('assets/script.js'); ?>"></script>
</body>
</html>


<!-- Future Addition:
1. Rating Info
<= $item['name']; ?> - Rating:
                            <php 
                            if(isset($item['rating'])){
                                echo number_format($item['rating'], 1);
                            } else {
                                echo 'Belum ada';
                            }
                            ?>
-->