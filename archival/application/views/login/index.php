<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/style.css'); ?>">
    <title>Login</title>
</head>
<body>
    <h3>Login</h3>

    <?php echo form_open('Login/do_login'); ?>

    <label for="username">Username</label>
    <input type="text" name="username" required>

    <label for="password">Password</label>
    <input type="password" name="password" required>

    <input type="submit" value="Login">

    <?php echo form_close(); ?>

    <p><?php echo validation_errors(); ?></p>
    <p><?php echo isset($error) ? $error : ''; ?></p>
    <br>
    <?= $this->session->flashdata('msg'); ?>
    <br>
    <a href="<?= site_url('login/signup'); ?>">Daftar</a>
</body>
</html>
