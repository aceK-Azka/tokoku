<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Menu</title>
</head>
<body>
    <h1>Upload Menu</h1>
    <br>
    <a href="<?=site_url('menu/show_menu')?>">Back</a>

    <?php echo $error; ?>

    <form action="<?=site_url('menu/do_upload')?>" method="post" enctype="multipart/form-data">

    <label for="name">Menu Name:</label>
    <input type="text" name="name" required>

    <label for="description">Description:</label>
    <textarea name="description" required></textarea>

    <label for="whatsapp_link">WhatsApp Link:</label>
    <input type="text" name="whatsapp_link" required>

    <label for="userfile">Menu Photo:</label>
    <input type="file" name="userfile" size="20" required>

    <button type="submit">Upload</button>

    </form>
</body>
</html>
