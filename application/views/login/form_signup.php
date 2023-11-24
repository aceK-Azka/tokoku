<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/style.css'); ?>">
    <title>Daftar</title>
</head>
<body>
    <h3>Daftar</h3>

    <?php echo form_open('Login/do_signup'); ?>

    <label for="username">Username</label>
    <input type="text" name="username" required>

    <label for="password">Password</label>
    <input type="password" name="password" required>

    <label for="category">Kategori</label>
    <select name="category" required>
      <option value="customer">customer</option>
      <option value="seller">seller</option>
    </select>

    <input type="submit" value="Daftar">

    <?php echo form_close(); ?>

    <p><?php echo validation_errors(); ?></p>
    <p><?php echo isset($error) ? $error : ''; ?></p>
    <br>
    <?= $this->session->flashdata('msg'); ?>
</body>
</html>
