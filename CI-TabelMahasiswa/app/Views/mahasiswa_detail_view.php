<!DOCTYPE html>
<html>
<head>
    <title>Detail Mahasiswa</title>
</head>
<body>
    <h1>Detail Mahasiswa</h1>

    <?php if(!empty($mahasiswa)): ?>
        <p><strong>NIM:</strong> <?= esc($mahasiswa['nim']); ?></p>
        <p><strong>Nama:</strong> <?= esc($mahasiswa['nama']); ?></p>
        <p><strong>Umur:</strong> <?= esc($mahasiswa['umur']); ?></p>
    <?php else: ?>
        <p>Data mahasiswa tidak ditemukan.</p>
    <?php endif; ?>

    <br>
    <a href="/mahasiswa/display">Kembali ke Daftar</a>

</body>
</html>