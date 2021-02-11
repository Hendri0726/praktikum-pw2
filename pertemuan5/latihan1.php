<?php
    $mahasiswa = [
        ["Jean", "H1101191001", "Sistem Informasi", "jeannhy@student.untan.ac.id"],
        ["Budi", "H1102211020", "Sistem Informasi", "setiabudi@student.untan.ac.id"],
        ["Hendri", "H1101221036", "Sistem Informasi", "hendri@student.untan.ac.id"]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs ) : ?>
    <ul>


        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NIM : <?= $mhs[1]; ?></li>
        <li>Prodi : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html> 