<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa - Project Sederhana</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

    <header>
        <h1>Daftar Siswa</h1>
        <nav>
            <a href="index.php">Beranda</a> |
            <a href="siswa.php">Daftar Siswa</a> |
            <a href="about.php">Tentang Kami</a>
        </nav>
    </header>

    <section>
        <h2>Daftar Siswa</h2>
        <?php
        // Data siswa yang didefinisikan secara manual
        $siswa = [
            ["nama" => "Andi", "kelas" => "XII IPA 1", "umur" => 17],
            ["nama" => "Budi", "kelas" => "XII IPA 2", "umur" => 18],
            ["nama" => "Cici", "kelas" => "XII IPS 1", "umur" => 17],
            ["nama" => "Dina", "kelas" => "XII IPS 2", "umur" => 18],
            ["nama" => "Edo", "kelas" => "XII IPA 3", "umur" => 17]
        ];
        ?>

        <table border="1" cellpadding="10">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Umur</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($siswa as $index => $data): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['kelas'] ?></td>
                    <td><?= $data['umur'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>

</body>
</html>
