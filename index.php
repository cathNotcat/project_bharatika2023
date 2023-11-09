<?php
header('Location: competition.php');

// session_start();
// if (!isset($_SESSION['id'])) {
//     header('Location: login.php');
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bharatika Creative Design Festival 2023 | Hello #LajuPeople!</title>
    <meta name="description"
        content="Bharatika Creative Design Festival pertama kali dibentuk oleh Fakultas Seni dan Desain Universitas Kristen Petra sejak tahun 2016 sebagai salah satu bentuk apresiasi terhadap karya insan muda kreatif. Secara keseluruhan, Bharatika dibentuk untuk menjadi wadah bagi insan muda kreatif untuk menyalurkan bakat, menambah wawasan, dan mengekspresikan diri terutama pada bidang seni dan desain. Kegiatan tersebut memiliki berbagai rangkaian acara, seperti pameran, talkshow, workshop, dan lomba. Bharatika memiliki empat kategori lomba, antara lain Tirta yang berarti air (Desain Komunikasi Visual), Agni yang berarti api (Desain Interior), Bayu yang berarti angin (Desain Produk), dan Buana yang berarti tanah (SMA).">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="Bharatika 2023 | PCU Petra Christian University">
    <meta itemprop="description"
        content="Bharatika Creative Design Festival pertama kali dibentuk oleh Fakultas Seni dan Desain Universitas Kristen Petra sejak tahun 2016 sebagai salah satu bentuk apresiasi terhadap karya insan muda kreatif. Secara keseluruhan, Bharatika dibentuk untuk menjadi wadah bagi insan muda kreatif untuk menyalurkan bakat, menambah wawasan, dan mengekspresikan diri terutama pada bidang seni dan desain. Kegiatan tersebut memiliki berbagai rangkaian acara, seperti pameran, talkshow, workshop, dan lomba. Bharatika memiliki empat kategori lomba, antara lain Tirta yang berarti air (Desain Komunikasi Visual), Agni yang berarti api (Desain Interior), Bayu yang berarti angin (Desain Produk), dan Buana yang berarti tanah (SMA).">
    <meta itemprop="image" content="assets/img/melaju_logo_meta.png">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://bharatikafest.petra.ac.id/2023/main/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Bharatika 2023 | PCU Petra Christian University">
    <meta property="og:description"
        content="Bharatika Creative Design Festival pertama kali dibentuk oleh Fakultas Seni dan Desain Universitas Kristen Petra sejak tahun 2016 sebagai salah satu bentuk apresiasi terhadap karya insan muda kreatif. Secara keseluruhan, Bharatika dibentuk untuk menjadi wadah bagi insan muda kreatif untuk menyalurkan bakat, menambah wawasan, dan mengekspresikan diri terutama pada bidang seni dan desain. Kegiatan tersebut memiliki berbagai rangkaian acara, seperti pameran, talkshow, workshop, dan lomba. Bharatika memiliki empat kategori lomba, antara lain Tirta yang berarti air (Desain Komunikasi Visual), Agni yang berarti api (Desain Interior), Bayu yang berarti angin (Desain Produk), dan Buana yang berarti tanah (SMA).">
    <meta property="og:image" content="assets/pngImg/melaju_logo_meta.png">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bharatika 2023 | PCU Petra Christian University">
    <meta name="twitter:description"
        content="Bharatika Creative Design Festival pertama kali dibentuk oleh Fakultas Seni dan Desain Universitas Kristen Petra sejak tahun 2016 sebagai salah satu bentuk apresiasi terhadap karya insan muda kreatif. Secara keseluruhan, Bharatika dibentuk untuk menjadi wadah bagi insan muda kreatif untuk menyalurkan bakat, menambah wawasan, dan mengekspresikan diri terutama pada bidang seni dan desain. Kegiatan tersebut memiliki berbagai rangkaian acara, seperti pameran, talkshow, workshop, dan lomba. Bharatika memiliki empat kategori lomba, antara lain Tirta yang berarti air (Desain Komunikasi Visual), Agni yang berarti api (Desain Interior), Bayu yang berarti angin (Desain Produk), dan Buana yang berarti tanah (SMA).">
    <meta name="twitter:image" content="assets/pngImg/melaju_logo_meta.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Icon -->
    <link href="../assets/img/melaju_logo_meta.png" rel="icon" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Bharatika</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./register.php">Register</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Lomba
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./lomba/agni.php">Agni</a></li>
                            <li><a class="dropdown-item" href="./lomba/bayu.php">Bayu</a></li>
                            <li><a class="dropdown-item" href="./lomba/buana.php">Buana</a></li>
                            <li><a class="dropdown-item" href="./lomba/tirta.php">Tirta</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./submit/">Submit Karya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../committee/">Comittee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>