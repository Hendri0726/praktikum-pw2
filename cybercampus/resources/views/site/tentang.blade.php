<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang</title>
</head>
<body>
<h1>Program Studi Sistem Informasi</h1>
  <h2>program studi sistem informasi mulai beroperasi pada tahun 2014</h2>
  <h1>Nama Ketua Jurusan <?= $kajur ?></h1>
  <?php echo $nama_prodi ?>
  <p>Waktu Saat ini: {{time()}}</p>
  @if (5 < 10) <h2>Kondisi benar</h2>
    @endif
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla sed deleniti sequi suscipit doloremque quae, dolorum, corporis obcaecati laborum ab necessitatibus in velit neque fuga inventore magni eum, facere reprehenderit?</p>
    <p>Nama Universitas : {{ $universitas }}</p>
</body>
</html>