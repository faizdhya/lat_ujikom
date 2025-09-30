<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi & Misi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col text-center">
                    <h2>
                        Visi & Misi
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mb-5">
            <div class="row">
                <div class="col">
                    <h4>
                        Visi:
                    </h4>
                </div>
            </div>

            <div class="container-fluid py-2 rounded-3 shadow" style="background-color: white;">
                <ol>
                    <?php
                    $visi = ['"TERWUJUDNYA LULUSAN YANG CERDAS, AKTIF, KOMPETITIF, ADAPTIF, DAN PRODUKTIF BERLANDASKAN IMAN DAN TAKWA"', '"(CAKAP BERIMTAK)"'];
                    foreach ($visi as $v) {
                    ?>
                        <p class="text-center"><?= $v ?></p>
                    <?php } ?>
                </ol>
            </div>

        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4>
                        Misi:
                    </h4>
                </div>
            </div>
            <div class="container-fluid py-2 rounded-3 shadow" style="background-color: white;">
                <ol>
                    <?php
                    $misi = ['Menyiapkan Sumber Daya Manusia yang cerdas dan kompeten baik hardskill maupun softskill.', 'Meningkatkan dan mengembangkan aktifitas serta kreatifitas seluruh warga sekolah dalam berbagai kegiatan positif.', 'Mewujudkan manajemen pengelolaan yang efektif, efesien, transparan, akuntabel dan layanan prima.', 'Menumbuhkan dan mengembangkan potensi dan kemampuan Sumber Daya Manusia yang berdaya saing tinggi melalui berbagai kegiatan akademik maupun non akademik.', 'Menyelenggarakan berbagai program kegiatan dalam upaya meningkatkan Sumber Daya Manusia yang mampu menyesuaikan dengan perkembangan.', 'Mengembangkan sarana prasarana dan lingkungan sekolah yang menyenangkan sebagai wadah menumbuhkembangkan daya kreasi dan inovasi untuk menghasilkan produk teknologi tepat guna.', 'Membangun jiwa wirausaha yang handal melalui pembelajaran Teaching Factory (TEFA) dan Kelas Industri.', 'Menjalin dan mengembangkan kemitraan dengan Industri dan Dunia Kerja (IDUKA) serta lembaga lainnya yang relevan.', 'Menanamkan dan membudayakan sikap dan perilaku yang baik pada aktivitas di sekolah maupun dalam kehidupan sehari-hari.'];
                    foreach ($misi as $m) {
                    ?>
                        <li>
                            <p><?= $m ?></p>
                        </li>
                    <?php } ?>
                </ol>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>