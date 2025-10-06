<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Ekstra</title>
</head>

<body>

  <section>
    <div class="container mt-5" style="margin-top: 10rem;">
      <div class="row">
        <div class="col text-center">
          <h3>EKSTRAKULIKULER</h3>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container d-flex flex-wrap justify-content-evenly text-center border-none jurusan " data-aos="fade-up" style="padding-top: 4rem;">
      <?php $ekskuls = [
        ["img" => "badminton.png", "nama" => "PPLG"],
        ["img" => "basket.png", "nama" => "TJKT"],
        ["img" => "irma.png", "nama" => "DKV"],
        ["img" => "pd.png", "nama" => "TOI"],
        ["img" => "pmr.png", "nama" => "TBSM"],
        ["img" => "pramuka.png", "nama" => "Pramuka"]
      ];
      ?>
      <?php foreach ($ekskuls as $ekskul): ?>
        <div class="row">
          <div class="col rounded-3 shadow">
            <div class="card" style="width: 18rem;">
              <img src="asset/ekskul/<?= $ekskul['img']; ?>" class="card-img-top-cs " alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $ekskul['nama']; ?></h5>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </section>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>