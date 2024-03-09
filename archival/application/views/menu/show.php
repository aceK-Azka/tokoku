<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu List</title>
</head>
<body>
    <h1>Menu List</h1>

    <form action="<?= base_url('menu/search_menu'); ?>" method="get">
        <label for="keyword">Search Menu:</label>
        <input type="text" name="keyword" required>
        <button type="submit">Search</button>
    </form>

    <a href="<?= site_url('menu/upload_menu') ?>">Add a Menu</a>

    <?php if (!empty($menu)): ?>
        <ul>
            <?php foreach ($menu as $item): ?>
                <li>
                    <img src="<?= base_url('assets/images/menus/'.$item['photo']) ?>" alt="<?= $item['name']; ?>"> <br>
                    <?= $item['name']; ?> <br>
                    <?= $item['description']; ?> <br>
                    <a href="<?= 'https://'.$item['whatsapp_link'] ?>"><button>Pesan</button></a> <br>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No menu available.</p>
    <?php endif; ?>

    <a href="<?= site_url('home'); ?>">Back</a><br>
    <a href="<?= site_url('login/logout'); ?>">Logout</a>
</body>
</html>

<!-- Future Addition:

-->