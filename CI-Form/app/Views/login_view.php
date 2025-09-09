<!DOCTYPE html>
<html lang="id">
<head>
    <title>Login | Sistem Informasi Akademik</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f7f6; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .login-container { background-color: #fff; padding: 40px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); width: 320px; text-align: center; }
        .login-container h2 { margin-bottom: 20px; color: #333; }
        .login-container input { width: 100%; padding: 12px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box; }
        .login-container button { width: 100%; padding: 12px; background: linear-gradient(90deg, #0052D4, #4364F7); color: #fff; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; }
        .alert { padding: 15px; margin-bottom: 20px; border-radius: 5px; color: #721c24; background-color: #f8d7da; border: 1px solid #f5c6cb; }
        .error-text {
            color: #dc3545; /* Merah */
            text-align: left;
            font-size: 12px;
            margin-top: -10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login Sistem</h2>

        <?php if(session()->getFlashdata('msg')):?>
            <div class="alert"><?= session()->getFlashdata('msg') ?></div>
        <?php endif;?>

        <form action="<?= base_url('login/process') ?>" method="post">
            <input type="text" name="username" placeholder="Username" value="<?= set_value('username') ?>">
            
            <?php if (!empty($validation) && $validation->hasError('username')) : ?>
                <div class="error-text">
                    <?= $validation->getError('username'); ?>
                </div>
            <?php endif; ?>

            <input type="password" name="password" placeholder="Password">
            
            <?php if (!empty($validation) && $validation->hasError('password')) : ?>
                <div class="error-text">
                    <?= $validation->getError('password'); ?>
                </div>
            <?php endif; ?>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>