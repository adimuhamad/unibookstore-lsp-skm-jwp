<!DOCTYPE html>
<html lang="en">

<?php
  include_once("config.php");
  $result = mysqli_query($mysqli, "select a.*, b.* from buku a inner join penerbit b on a.id_penerbit=b.id_penerbit where stok <= 10 order by stok asc");
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UNIBOOKSTORE | PENGADAAN</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container-fluid">
      <a class="navbar-brand" href="index">UNIBOOKSTORE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" aria-current="page" href="index">HOME</a>
          <a class="nav-link" href="admin">ADMIN</a>
          <a class="nav-link" href="pengadaan">PENGADAAN</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container">
  <h3>Data Buku Dengan Stok Kurang Dari Atau Sama Dengan 10</h3>
    <table class="table table-striped ">
      <thead class="table-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Buku</th>
          <th scope="col">Penerbit</th>
          <th scope="col">Stok</th>
        </tr>
      </thead>
      <tbody>
        
      <?php
      $no = 1;
      while($data = mysqli_fetch_array($result)) { ?>     
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $data['nama_buku']; ?></td>
          <td><?php echo $data['nama']; ?></td>
          <td><?php echo $data['stok']; ?></td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>

</body>

</html>