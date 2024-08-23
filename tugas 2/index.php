<?php

$jamkerja = isset($_POST['jamkerja']) ? intval($_POST['jamkerja']) : 0;
$jampertama = 50000;
$jamselanjutnya = 25000;

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hitung Gaji Lembur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header text-center">
              <h4>Hitung Gaji Lembur</h4>
            </div>
            <div class="card-body">
              <form action="" method="POST">
                <div class="mb-3">
                  <label for="jamkerja" class="form-label">Masukkan Jam Kerja Anda Hari Ini:</label>
                  <input type="text" class="form-control" name="jamkerja" id="jamkerja" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Hitung</button>
              </form>

              <?php if($jamkerja > 0):?>
                <?php
                  if($jamkerja > 8) {
                      $lembur = $jamkerja - 8;
                      $gajiLembur = $lembur * $jamselanjutnya;
                      $gajiTotal = $jampertama + $gajiLembur - 25000;
                  ?>
                  <div class="alert alert-success mt-3" role="alert">
                      <strong>Lama kerja:</strong> <?=$jamkerja?> jam <br>
                      <strong>Jam lembur:</strong> <?=$lembur?> jam <br>
                      <strong>Gaji Anda seharusnya:</strong> Rp. <?=number_format($gajiTotal,0,"",".")?>
                  </div>
                <?php } else { ?>
                  <div class="alert alert-warning mt-3">
                      Anda tidak mendapat kompensasi haha.
                  </div>
                <?php }?>
              <?php endif;?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVb
