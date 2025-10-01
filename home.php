<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMKN 4 Tasikmalaya</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <section>
    <div class="container-fluid p-0">
      <img src="asset\3.JPG" class="foto" alt="Banner">
    </div>
  </section>

  <section>
    <div class="container text-center py-5">
      <div class="row justify-content-between g-3">
        <?php
        $icon_statistik = [
          // Guru
          '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mx-auto d-block">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
        </svg>',
          // Siswa
          '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mx-auto d-block">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
        </svg>',
          // Ekstrakulikuler
          '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mx-auto d-block">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904a4.875 4.875 0 0 1-.59-1.591c-.083-.404.243-.813.663-.813h4.228c.42 0 .746.41.663.813a4.876 4.876 0 0 1-.59 1.591m-3.142 0a2.25 2.25 0 0 0 3.142 0M8.625 6.75h6.75m-7.5 3h8.25M10.5 3.75h3a2.25 2.25 0 0 1 2.25 2.25v12a2.25 2.25 0 0 1-2.25 2.25h-3a2.25 2.25 0 0 1-2.25-2.25v-12A2.25 2.25 0 0 1 10.5 3.75Z" />
        </svg>',
          // Staff TU
          '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mx-auto d-block">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>',
        ];

        $jmlh_statistik = ['82', '1500', '18', '10'];
        $nama_statistik = ['Guru', 'Siswa', 'Ekstrakulikuler', 'Staff TU'];

        for ($i = 0; $i < count($icon_statistik); $i++) {
        ?>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center mb-2">
            <div class="card rounded-3 shadow py-2" style="width: 18rem;">
              <div class="icon my-2" style="margin-inline-start: 7.7rem;">
                <?= $icon_statistik[$i] ?>
              </div>
              <div class="card-body py-1">
                <h5 class="card-title mb-1"><?= $jmlh_statistik[$i] ?></h5>
                <p class="mb-0"><?= $nama_statistik[$i] ?></p>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>


  <section class="mt-5">
    <div class="container" data-aos="fade-left">
      <div class="row justify-content-center">
        <div class="col-4 align-content-center">
          <img src="asset\foto2.jpg" width="200rem" style="border-radius: 50%;" alt="">
        </div>
        <div class="col-7 text-center">
          <h2>Sambutan Kepala Sekolah</h2>
          <p>Assalamualaikum Warahmatullahi Wabarakatuh

            Segala puji dan syukur kita panjatkan kehadirat Allah SWT, semoga kita semua ada dalam lindungan-Nya. Dan atas perkenan-Nya pula kami dapat menghadirkan website SMK Negeri 4 Tasikmalaya ini. Kami berharap dengan adanya website di SMK Negeri 4 Tasikmalaya ini para pengunjung dapat mengenal lebih jauh tentang sekolah kami sehingga dapat mempererat tali silaturrahmi antara sekolah dengan masyarakat demi kemajuan kita bersama. Tiada gading yang tak retak, website kami ini masih dalam proses pengembangan, masih banyak kekurangan yang harus kami perbaiki. Kritik dan sarannya yang membangun sangat kami harapkan untuk pengembangan ke depan.

            Akhirnya, saya mengucapkan terimakasih yang sebesar-besarnya kepada semua pihak yang tidak dapat disebutkan satu segala bantuan dan persatu atas fasilitasnya yang telah diberikan semoga semua yang kita lakukan bermanfaat bagi masyarakat.

            Wassalamu'alaikum Warahmatullahi Wabarakatuh.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="mt-5">
    <div class="container" data-aos="fade-up" id="jurusan">
      <div class="row justify-content-center">
        <div class="col-7 text-center">
          <h2>Jurusan</h2>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container d-flex flex-wrap justify-content-evenly text-center border-none jurusan" data-aos="fade-up" style="padding-top: 4rem;">
      <?php $jurusans = [
        ["img" => "pplg.png", "nama" => "PPLG"],
        ["img" => "tjkt.png", "nama" => "TJKT"],
        ["img" => "dkv.png", "nama" => "DKV"],
        ["img" => "toi.png", "nama" => "TOI"],
        ["img" => "tbsm.png", "nama" => "TBSM"],

      ];
      ?>
      <?php foreach ($jurusans as $jurusan): ?>
        <div class="card" style="width: 10rem;">
          <img src="asset/jurusan/<?= $jurusan['img']; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $jurusan['nama'] ?></h5>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </section>

  <section class="mt-5">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-7 text-center">
          <h2 id="unggulan">Unggulan</h2>
          <p>SMK Negeri 4 Kota Tasikmalaya terletak di lokasi yang sangat strategis
            serta memiliki keunggulan baik itu dalam bidang Akademik mapupun Non Akademik
            yang mampu menciptakan lulusan yang terbaik secara sosial maupun spiritual</p>
        </div>
      </div>
    </div>
  </section>

  <section class="mt-5">
    <div class="container" data-aos="fade-right">
      <div class="row">
        <div class="col-4">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 icon mb-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498 4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 0 0-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0Z" />
          </svg>

          <h5>Lokasi yang sangat strategis</h5>
          <p>Sangat mudah dijangkau dengan kendaraan umum dan dekat ke pusat kota</p>
        </div>
        <div class="col-4">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 icon mb-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
          </svg>
          <h5>Lapangan olahraga yang luas</h5>
          <p>Dengan lapangan yang luas, mampu digunakan untuk olahraga Futsal, Basket, Voli, dll</p>
        </div>
        <div class="col-4">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 icon mb-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
          </svg>
          <h5>Tempat Ibadah (Mesjid)</h5>
          <p>Terdiri dari 3 lantai, mampu menampung seluruh siswa untuk ibadah secara berjamaah</p>
        </div>
        <div class="col-4">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 icon mb-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
          </svg>

          <h5>Laboratorium Canggih</h5>
          <p>4 Lab.Komputer, Multimedia, Perpustakaan, Serta Lab. Biologi, Fisika, Kimia dan Ruang Olahraga</p>
        </div>
        <div class="col-4">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 icon mb-2">
            <path d="M12.75 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM7.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM8.25 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM9.75 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM10.5 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM12.75 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM14.25 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 13.5a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" />
            <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z" clip-rule="evenodd" />
          </svg>

          <h5>Sistem Akademik yang Ideal</h5>
          <p>Proses belajar mengajar Senin s.d Jumat, mulai jam 07.00 s.d 15.30, Ekstrakurikuler di Hari Sabtu
          </p>
        </div>
        <div class="col-4">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 icon mb-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
          </svg>

          <h5>Tenaga Pendidik & Kependidikan</h5>
          <p>Memiliki Guru & Staff Tata Usaha dengan Lulusan S1 & S2 menciptakan Lulusan yang terbaik</p>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container mt-5">
      <div class="row">
        <div class="col">
          <h2 class="text-center">Berita</h2>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container mt-5">
      <?php $beritas = [
        [
          "link" => "https://bandung.kompas.com/read/2024/07/24/115239678/cegah-geng-motor-smkn-di-tasikmalaya-luncurkan-ekstrakurikuler-unik",
          "img" => "berita1.jpg",
          "judul" => "Cegah Geng Motor, SMKN di Tasikmalaya Luncurkan Ekstrakurikuler Unik",
          "desk" => "Sekolah Menengah Kejuruan Negeri (SMKN) 4 Kota Tasikmalaya, meluncurkan program ekstrakurikuler unik, yakni keselamatan berkendara atau safety riding bagi para..."
        ],
      ];
      ?>
      <?php foreach ($beritas as $berita): ?>
        <div class="row justify-content-center shadow">
          <div class="col-4">
            <a href="<?= $berita['link']; ?>">
              <img src="asset/berita/berita1.jpg" class=" img-thumbnail border-none ">
            </a>
          </div>
          <div class="col-8">
            <a href="<?= $berita['link']; ?>">
              <h4><?= $berita['judul']; ?></h4>
              <p><?= $berita['desk']; ?></p>
            </a>
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
\