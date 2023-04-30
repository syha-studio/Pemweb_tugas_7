<?php
require '3-function.php';
$pegawai  = query("SELECT * FROM pegawai ORDER BY id_pegawai");
$departemen  = query("SELECT * FROM departemen ORDER BY id_departemen");
$jobs  = query("SELECT * FROM jobs ORDER BY id_job");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Program Kelola Pegawai</title>
    <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  </head>

  <body>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #0B2Fa6">
      <div class="container">
        <a class="navbar-brand" href="" style="color: white; font-weight: 700">PROGRAM KELOLA PEGAWAI</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- Akhir NavBar -->

    <!-- Tabel Pegawai -->
    <div class="container pt-2 pb-2">
      <div class="d-flex justify-content-center pt-3 pb-1">
        <h1 class="fw-bolder">KELOLA PEGAWAI</h1>
      </div>
      <!-- Tabel dan Kontrol-->
      <div class="col-md-auto ps-3 me-0">
        <a href="3-pTambah.php"><button type="button" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Tambah Pegawai</button></a>
      </div>
      <div class="pt-2 pb-2 table-responsive">
        <table class="table table-striped table-bordered align-middle">
          <tr class="text-center">
            <th>No.</th>
            <th>ID Pegawai</th>
            <th>Nama Pegawai</th>
            <th>Email</th>
            <th>No HP</th>
            <th>Hire Date</th>
            <th>ID Departemen</th>
            <th>ID Jabatan</th>
            <th>Aksi</th>
          </tr>
          <?php $i = 1 ?>
          <?php foreach ($pegawai as $row) : ?>
          <tr>
            <td><?= $i ?></td>
            <td><?= $row["id_pegawai"]?></td>
            <td><?= $row["nama"]?></td>
            <td><?= $row["email"]?></td>
            <td ><?= $row["no_hp"]?></td>
            <td ><?= $row["hire_date"]?></td>
            <td ><?= $row["id_departemen"]?></td>
            <td ><?= $row["id_job"]?></td>
            <td class="text-center">
            <a href="3-pHapus.php?id_pegawai=<?= $row["id_pegawai"];?>" onclick="return confirm('Yakin?');"><button type="button" class="btn btn-secondary btn-sm pb-1"><i class="bi bi-trash"></i></button></a>
            <a href="3-pUbah.php?id_pegawai=<?= $row["id_pegawai"];?>"><button type="button" class="btn btn-secondary btn-sm pb-1"><i class="bi bi-pencil-square"></i></button></a>
            </td>
          </tr>
          <?php $i++ ?>
          <?php endforeach ?>
        </table>
      </div>
    <!-- Akhir Tabel dan Kontrol -->
    <!-- Akhir Tabel Pegawai -->
    </div>

    <!-- Tabel Departemen -->
    <div class="container pt-2 pb-2">
      <div class="d-flex justify-content-center pt-3 pb-1">
        <h1 class="fw-bolder">KELOLA DEPARTEMEN</h1>
      </div>
      <!-- Tabel dan Kontrol-->
      <div class="col-md-auto ps-3 me-0">
        <a href="3-dTambah.php"><button type="button" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Tambah Departemen</button></a>
      </div>
      <div class="pt-2 pb-2 table-responsive">
        <table class="table table-striped table-bordered align-middle">
          <tr class="text-center">
            <th>No.</th>
            <th>ID Departemen</th>
            <th>Nama Departemen</th>
            <th>Aksi</th>
          </tr>
          <?php $i = 1 ?>
          <?php foreach ($departemen as $row) : ?>
          <tr>
            <td><?= $i ?></td>
            <td><?= $row["id_departemen"]?></td>
            <td><?= $row["departemen_name"]?></td>
            <td class="text-center">
            <a href="3-dHapus.php?id_departemen=<?= $row["id_departemen"];?>" onclick="return confirm('Yakin?');"><button type="button" class="btn btn-secondary btn-sm pb-1"><i class="bi bi-trash"></i></button></a>
            <a href="3-dUbah.php?id_departemen=<?= $row["id_departemen"];?>"><button type="button" class="btn btn-secondary btn-sm pb-1"><i class="bi bi-pencil-square"></i></button></a>
            </td>
          </tr>
          <?php $i++ ?>
          <?php endforeach ?>
        </table>
      </div>
    <!-- Akhir Tabel dan Kontrol -->
    <!-- Akhir Tabel Departemen -->
    </div>

    <!-- Tabel Jobs -->
    <div class="container pt-2 pb-2">
      <div class="d-flex justify-content-center pt-3 pb-1">
        <h1 class="fw-bolder">KELOLA JABATAN</h1>
      </div>
      <!-- Tabel dan Kontrol-->
      <div class="col-md-auto ps-3 me-0">
        <a href="3-jTambah.php"><button type="button" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Tambah Jabatan</button></a>
      </div>
      <div class="pt-2 pb-2 table-responsive">
        <table class="table table-striped table-bordered align-middle">
          <tr class="text-center">
            <th>No.</th>
            <th>ID Jabatan</th>
            <th>Nama Jabatan</th>
            <th>Aksi</th>
          </tr>
          <?php $i = 1 ?>
          <?php foreach ($jobs as $row) : ?>
          <tr>
            <td><?= $i ?></td>
            <td><?= $row["id_job"]?></td>
            <td><?= $row["job_title"]?></td>
            <td class="text-center">
            <a href="3-jHapus.php?id_job=<?= $row["id_job"];?>" onclick="return confirm('Yakin?');"><button type="button" class="btn btn-secondary btn-sm pb-1"><i class="bi bi-trash"></i></button></a>
            <a href="3-jUbah.php?id_job=<?= $row["id_job"];?>"><button type="button" class="btn btn-secondary btn-sm pb-1"><i class="bi bi-pencil-square "></i></button></a>
            </td>
          </tr>
          <?php $i++ ?>
          <?php endforeach ?>
        </table>
      </div>
    <!-- Akhir Tabel dan Kontrol -->
    <!-- Akhir Tabel Jobs -->
    </div>
  </body>
</html>