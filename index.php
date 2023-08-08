<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>Front end</title>
    <script src="https://kit.fontawesome.com/ed04ec62b5.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.5/keen-slider.min.css" />
    <link href="assets/css/style.css" rel="stylesheet">

    <style>
        [class^="number-slide"],
        [class*=" number-slide"] {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 50px;
        }
    </style>
</head>

<body>


    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-blue">
            <div class="container">
                <a class="navbar-brand" href="#">
                    KONGSI
                    <img src="assets/img/ole777-white.png" width="90px" alt="KONGSI">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto d-md-none mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#">Tentang OLE777</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Komisi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Peraturan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pertanyaan & Jawaban</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active-color" href="#">OLE777 Official</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Daftar sekarang</a>
                        </li>
                    </ul>
                </div>
                <div class="d-none d-md-block">
                    <button class="btn btn-sm btn-orange mx-1" type="submit">Login</button>
                    <button class="btn btn-sm btn-secondary mx-1" type="submit">Daftar sekarang</button>
                </div>
            </div>
        </nav>
        <nav class="custom-navbar d-none d-md-block bg-light-blue">
            <div class="container">
                <ul class="custom-navbar-nav w-100 mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active-color" aria-current="page" href="#">Tentang OLE777</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Komisi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Peraturan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pertanyaan & Jawaban</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="#">OLE777 Official</a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div id="my-keen-slider-2" class="keen-slider">
            <?php
            $apiUrl = "https://super7tech.com/web_developer_exam_sr/json/slideshow.json"; // Replace with the actual API URL

            $curl = curl_init($apiUrl);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($curl);

            if ($response === false) {
                echo "Error: " . curl_error($curl);
            } else {
                $data = json_decode($response, true);

                if (json_last_error() === JSON_ERROR_NONE) {
                    // JSON data has been successfully decoded
                    foreach ($data as $item) {
                        $imageSrc = $item['img'];
                        $altText = $item['name'];
                        echo '<div class="keen-slider__slide">';
                        echo '<img src="' . $imageSrc . '" width="100%" height="auto" alt="' . $altText . '">';
                        echo '</div>';
                    }
                } else {
                    echo "JSON Decode Error: " . json_last_error_msg();
                }
            }

            curl_close($curl);
            ?>
        </div>

        <!-- <img src="assets/img/OLE777_OCT_31.webp" width="100%" height="auto" alt="OLE777_OCT_31"> -->
        <div class="container my-5">
            <div id="my-keen-slider" class="keen-slider">
                <div class="keen-slider__slide number-slide1">
                    <img src="assets/img/img-cta-1.jpg" class="d-block w-100 border-raduis-2" alt="Slide 1">
                </div>
                <div class="keen-slider__slide number-slide2">
                    <img src="assets/img/img-cta-2.jpg" class="d-block w-100 border-raduis-2" alt="Slide 1">
                </div>
                <div class="keen-slider__slide number-slide3">
                    <img src="assets/img/img-cta-3.jpg" class="d-block w-100 border-raduis-2" alt="Slide 1">
                </div>
            </div>
        </div>


        <div class="container-fluid py-5" style="background-color: #d2d2d2;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p><b>Kongsi OLE777</b> adalah program OLE777 Affiliate bola yang memberikan member dan
                            non-member
                            penghasilan dengan platform OLE777.
                            Berdiri sejak tahun 2014, OLE777 memberikan hiburan online dengan kenyamanan, kualitas
                            produk,
                            layanan pelanggan terbaik, dan keuntungan bagi
                            untuk seluruh player, dan anggota Kongsi OLE777 Affiliate Bola.
                        </p>

                    </div>
                    <div class="col-md-12">
                        <p><b> Langkah-langkah mendapatkan komisi dengan menjadi Kongsi OLE777:</b></p>

                        <p><span class="border-number">1.</span> Daftar dengan kiik tombol * Daftar Sekarang” atau
                            melalui link yang diberikan
                            oleh tim
                            kami.</p>
                        <p><span class="border-number">2.</span> Lakukan Pendaftaran</p>
                        <p><span class="border-number">3.</span> Sebarkan link khusus yang Anda dapat dari akun Anda.
                        </p>
                        <p><span class="border-number">4.</span> Anda bisa menyebarkan link melalui akun-akun Sosial
                            Media Anda, seperti
                            Facebook,
                            Instagram, YouTube, Twitter, dan lain-lain.</p>

                    </div>
                </div>
                <div class="row mt-5 d-flex justify-content-center text-center">
                    <div class="col-lg-3">
                        <img class="mb-3" src="assets/img/img-group.svg" alt="">
                        <h3 class="fw-bold color-blue">Tim Pembayaran <br> yang Profesional</h3>
                        <p> Metode pembayaran beragam dan
                            terpercaya. Setiap dana pemain
                            aman dan terjamin.</p>
                    </div>
                    <div class="col-lg-3">
                        <img class="mb-3" src="assets/img/img-domino.svg" alt="">
                        <h3 class="fw-bold color-blue">Brand yang
                            Terkenal</h3>
                        <p>Anggaran pemasaran yang luar
                            biasa. Biarkan Anda menikmati
                            efek dari merek berkualitas.</p>
                    </div>
                    <div class="col-lg-3">
                        <img class="mb-3" src="assets/img/img-document.svg" alt="">
                        <h3 class="fw-bold color-blue">Sistem Laporan
                            Profesional</h3>
                        <p>Format pelaporan yang rapi &
                            bersih. Lihat laporan harian &
                            bulanan di satu titik</p>
                    </div>
                    <div class="col-lg-3">
                        <img class="mb-3" src="assets/img/img-settings.svg" alt="">
                        <h3 class="fw-bold  color-blue">Personalisasikan
                            Paket Pribadi</h3>
                        <p>Kami dapat menyesuaikan promosi
                            khusus untuk Anda. Membuat
                            promosi Anda menjadi Mudah</p>

                    </div>
                </div>
            </div>

        </div>
        <div class="container my-2">
            <img src="assets/img/Sticker WhatsApp Gratis - Kongsi OLE777.gif" width="100%" height="auto" alt="">
        </div>
        <div class="container-fluid d-flex justify-content-center flex-wrap bg-light-blue text-white py-3">
            <div class="d-flex align-items-center justify-content-center">
                <img src="assets/img/icon-skype.svg" alt="">
                <p class="m-2 ">Pelayanan Pelanggan Skype: <span class="active-color">ffiliasi.id@oleint l.com</span>
                </p>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <img src="assets/img/icon-email.svg" alt="">
                <p class="m-2 ">Email: <span class="active-color">affiliatebola@ole777-indo.com</span> </p>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <img src="assets/img/icon-whatsapp.svg" alt="">
                <p class="m-2 ">Whatsapp: <span class="active-color">+6287807264445</span> </p>
            </div>
        </div>
        <footer class="container-fluid bg-blue text-center p-3">
            <img class="my-2" src="assets/img/logo-chelsea.svg" alt="">
            <img class="my-2" src="assets/img/logo-pagcor.png" alt="">
            <img class="my-2" src="assets/img/logo-iom.png" alt="">
            <img class="my-2" src="assets/img/ole777-white.png" alt="">
        </footer>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/keen-slider@6.8.5/keen-slider.min.js"></script>
    <script>
        var slider = new KeenSlider("#my-keen-slider", {
            breakpoints: {
                "(min-width: 400px)": {
                    slides: {
                        perView: 1,
                        spacing: 5
                    },
                },
                "(min-width: 1000px)": {
                    slides: {
                        perView: 3,
                        spacing: 10
                    },
                },
            },
            slides: {
                perView: 1
            },
        })
    </script>
    <script>
        var slider = new KeenSlider(
            "#my-keen-slider-2", {
                loop: true,
            },
            [
                (slider) => {
                    let timeout
                    let mouseOver = false

                    function clearNextTimeout() {
                        clearTimeout(timeout)
                    }

                    function nextTimeout() {
                        clearTimeout(timeout)
                        if (mouseOver) return
                        timeout = setTimeout(() => {
                            slider.next()
                        }, 2000)
                    }
                    slider.on("created", () => {
                        slider.container.addEventListener("mouseover", () => {
                            mouseOver = true
                            clearNextTimeout()
                        })
                        slider.container.addEventListener("mouseout", () => {
                            mouseOver = false
                            nextTimeout()
                        })
                        nextTimeout()
                    })
                    slider.on("dragStarted", clearNextTimeout)
                    slider.on("animationEnded", nextTimeout)
                    slider.on("updated", nextTimeout)
                },
            ]
        )
    </script>
</body>

</html>