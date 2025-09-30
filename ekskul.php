<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekstra</title>
</head>
<body>

<section>
  <div class="container mt-5" style="margin-top: 10rem;">
    <div class="row">
      <div class="col text-center">
        <h3>Ekstrakulikuler Sekolah</h3>
      </div>
    </div>
  </div>
</section>
  <section>
    <div class="container d-flex flex-wrap justify-content-evenly text-center border-none jurusan" data-aos="fade-up" style="padding-top: 4rem;">
      <?php
      $gambar_jrsn = ["asset/pplg.png", "asset/tjkt.png", "asset/dkv.png", "asset/toi.png", "asset/tbsm.png"];
      $nama_jrsn = ["PPLG", "TJKT", "DKV", "TOI", "TBSM"];
      for ($i = 0; $i < count($gambar_jrsn); $i++) {
      ?>
        <div class="card" style="width: 10rem;">
          <img src="<?= $gambar_jrsn[$i] ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $nama_jrsn[$i] ?></h5>
          </div>
        </div>
      <?php } ?>
    </div>
  </section>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>