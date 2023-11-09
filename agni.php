<?php
include '../connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <title>Bharatika Creative Design Festival 2023 | Hello #LajuPeople!</title> 
    <meta name="description" content="Bharatika Creative Design Festival pertama kali dibentuk oleh Fakultas Seni dan Desain Universitas Kristen Petra sejak tahun 2016 sebagai salah satu bentuk apresiasi terhadap karya insan muda kreatif. Secara keseluruhan, Bharatika dibentuk untuk menjadi wadah bagi insan muda kreatif untuk menyalurkan bakat, menambah wawasan, dan mengekspresikan diri terutama pada bidang seni dan desain. Kegiatan tersebut memiliki berbagai rangkaian acara, seperti pameran, talkshow, workshop, dan lomba. Bharatika memiliki empat kategori lomba, antara lain Tirta yang berarti air (Desain Komunikasi Visual), Agni yang berarti api (Desain Interior), Bayu yang berarti angin (Desain Produk), dan Buana yang berarti tanah (SMA).">
    
    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="Bharatika 2023 | PCU Petra Christian University">
    <meta itemprop="description" content="Bharatika Creative Design Festival pertama kali dibentuk oleh Fakultas Seni dan Desain Universitas Kristen Petra sejak tahun 2016 sebagai salah satu bentuk apresiasi terhadap karya insan muda kreatif. Secara keseluruhan, Bharatika dibentuk untuk menjadi wadah bagi insan muda kreatif untuk menyalurkan bakat, menambah wawasan, dan mengekspresikan diri terutama pada bidang seni dan desain. Kegiatan tersebut memiliki berbagai rangkaian acara, seperti pameran, talkshow, workshop, dan lomba. Bharatika memiliki empat kategori lomba, antara lain Tirta yang berarti air (Desain Komunikasi Visual), Agni yang berarti api (Desain Interior), Bayu yang berarti angin (Desain Produk), dan Buana yang berarti tanah (SMA).">
    <meta itemprop="image" content="assets/img/melaju_logo_meta.png">
    
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://bharatikafest.petra.ac.id/2023/main/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Bharatika 2023 | PCU Petra Christian University">
    <meta property="og:description" content="Bharatika Creative Design Festival pertama kali dibentuk oleh Fakultas Seni dan Desain Universitas Kristen Petra sejak tahun 2016 sebagai salah satu bentuk apresiasi terhadap karya insan muda kreatif. Secara keseluruhan, Bharatika dibentuk untuk menjadi wadah bagi insan muda kreatif untuk menyalurkan bakat, menambah wawasan, dan mengekspresikan diri terutama pada bidang seni dan desain. Kegiatan tersebut memiliki berbagai rangkaian acara, seperti pameran, talkshow, workshop, dan lomba. Bharatika memiliki empat kategori lomba, antara lain Tirta yang berarti air (Desain Komunikasi Visual), Agni yang berarti api (Desain Interior), Bayu yang berarti angin (Desain Produk), dan Buana yang berarti tanah (SMA).">
    <meta property="og:image" content="assets/pngImg/melaju_logo_meta.png">
    
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bharatika 2023 | PCU Petra Christian University">
    <meta name="twitter:description" content="Bharatika Creative Design Festival pertama kali dibentuk oleh Fakultas Seni dan Desain Universitas Kristen Petra sejak tahun 2016 sebagai salah satu bentuk apresiasi terhadap karya insan muda kreatif. Secara keseluruhan, Bharatika dibentuk untuk menjadi wadah bagi insan muda kreatif untuk menyalurkan bakat, menambah wawasan, dan mengekspresikan diri terutama pada bidang seni dan desain. Kegiatan tersebut memiliki berbagai rangkaian acara, seperti pameran, talkshow, workshop, dan lomba. Bharatika memiliki empat kategori lomba, antara lain Tirta yang berarti air (Desain Komunikasi Visual), Agni yang berarti api (Desain Interior), Bayu yang berarti angin (Desain Produk), dan Buana yang berarti tanah (SMA).">
    <meta name="twitter:image" content="assets/pngImg/melaju_logo_meta.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- keywoards -->
    <meta content="Bharatika Creative Design Festival 2023" name="author" />
    <meta content="Bharatika, UK Petra, UK Petra, PCU, Petra Christian University, Seminar, Lomba, workshop, Talkshow" name="keywords" />
    <!-- Icon -->
    <link rel="icon" type="image/x-icon" href="assets/img/melaju_logo_meta.png">

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script> -->
    <!-- Bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="assets/styles/competition_bg.css" />
    <link rel="stylesheet" href="assets/styles/competition.css">
    <!-- <script src="js/competition.js"></script> -->
    <style>
        body {
            background: radial-gradient(circle, rgba(241, 191, 52, 1) 0%, rgba(20, 89, 163, 1) 94%);
        }

        #noise {
            position: absolute;
            width: 100vw;
            height: auto;
            top: 0;
            left: 0;
        }
        #punggawa { 
            left: -2%;
        }

        @media (max-width: 992px) and (min-width: 768px){
            #punggawa {
                left: -6%;
            }
        }
        @media (max-width: 767px){
            #punggawa {
                left: -33%;
            }
        }
    </style>

</head>

<body>
    <?php include 'navbar.php'; ?>
    <?php include 'loader.php'; ?>
    <!-- DIV Punggawa dan page awal -->
    <!-- Filter noisenya -->
    <svg id="noise" xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='100%'
        height='100vh'>

        <filter id='n' x='0' y='0'>
            <feTurbulence type='turbulence' baseFrequency='0.75' stitchTiles='stitch' />
        </filter>

        <rect width='100%' height='100vh' fill='transparent' />
        <rect width='100%' height='100vh' filter="url(#n)" opacity='0.50' />
    </svg>
    <div class="main">

        <!-- Spinner -->
        <div class="spinner">
            <!-- <img id="circle" class="scaler" src="assets/img/agni_circle.png" alt=""> -->
            <?php include('assets/svg/agni.svg') ?>
        </div>

        <div class="compFirstPage">
            <div class="left">
                <p class="compPar" style="color:#fff8d6;">
                    Agni merupakan salah satu kategori lomba yang diadakan Bharatika Creative Design Festival. Kategori
                    Agni merupakan lomba program studi Desain Interior. Pada tahun ini, Bharatika menyelenggarakan empat
                    lomba dalam Kategori Agni.

                </p>
                <ul class="menus">
                    <li><a href="competition.php" id="tirta">TIRTA</a></li>
                    <li><a href="agni.php" class="active" id="agni">AGNI</a></li>
                    <li><a href="bayu.php" id="bayu">BAYU</a></li>
                    <li><a href="buana.php" id="buana">BUANA</a></li>
                </ul>
            </div>
            <div class="right">
                <img id="punggawa" src="assets/img/Agni.png" alt="" />
            </div>
        </div>
    </div>

    <!-- Kotak lomba yang kanan -->
    <div class="lomba-wrapper">
        <div class="scroll-container">

            <div class="scroll-area off">
                <div class="container">
                    <div class="row">
                        <!-- col-12 -> title -->
                        <div class="title">
                            LIVING ROOM DESIGN
                        </div>
                        <div class="imgresp off">
                            <img src="assets/img/temp.png" class="img-fluid" alt="Responsive image">
                        </div>
                        <div class="row">
                            <div class="col info">
                                <div class="d-grid gap-3">
                                    <button onclick="daftarLomba(121)" id="btn1"
                                        class="button guidelines bnr" role="button"
                                        data-bs-toggle="button">GUIDELINES</button>
                                    <button onclick="daftarLomba(121)" id="btn1"
                                        class="button explode bnr" role="button"
                                        data-bs-toggle="button">EXPLODE</button>
                                </div>
                                <div class="row justify-content-around geresp">
                                    <button onclick="daftarLomba(121)" id="btn2"
                                        class="col-5 btnresp button guidelines off" role="button"
                                        data-bs-toggle="button">GUIDELINES</button>
                                    <button onclick="daftarLomba(121)" id="btn2"
                                        class="col-5 btnresp button explode off" role="button"
                                        data-bs-toggle="button">EXPLODE</button>

                                </div>
                                <div class="read-more-container">
                                    <div class="rm-container">
                                        <p>
                                            Living Room Design merupakan sebuah lomba dimana peserta diminta untuk
                                            mendesain ruang keluarga.
                                        <p class="read-more-text">
                                            Peserta diharapkan dapat menata dan mendekorasi suatu ruangan senyaman dan
                                            semenarik mungkin serta sesuai dengan brief yang telah diberikan oleh
                                            panitia.

                                        </p>
                                        <button class="read-more-btn">Read More...</button>
                                        </p>

                                    </div>
                                </div>
                                <div class="row harga" style="margin-top : -15px">
                                    <div class="col-6">
                                        <span>35K</span>
                                        <p class="ita">Per Orang</p>
                                    </div>
                                    <div class="col-6">
                                        <span>1-2</span>
                                        <p class="ita">Laju People</p>
                                    </div>
                                </div>
                            </div>
                            <div class="icon img on" style="width : 68%">
                                <img src="assets/img/temp.png" class="img-fluid icon" alt="Responsive image">
                            </div>
                        </div>
                    </div>
                    <div class="borderline"></div>
                </div>
            </div>

            <div class="scroll-area">
                <div class="container">
                    <div class="row">

                        <div class="title">
                            LIVING ROOM DESIGN
                        </div>
                        <div class="imgresp off">
                            <img src="assets/img/Living room.png" class="img-fluid" alt="Responsive image">
                        </div>
                        <div class="row">
                            <div class="col info">
                                <div class="d-grid gap-3">
                                    <button
                                        onclick="window.open('https://drive.google.com/drive/folders/1diC4GfUbojbqksWSKEs3e9OwQr4wlZZx?usp=sharing', '_blank')"
                                        id="btn1" class="button guidelines bnr" role="button"
                                        data-bs-toggle="button">GUIDELINES</button>
                                    <button onclick="daftarLomba(121)" id="btn1"
                                        class="button explode bnr" role="button"
                                        data-bs-toggle="button">EXPLODE</button>
                                </div>
                                <div class="row justify-content-around geresp">
                                    <button
                                        onclick="window.open('https://drive.google.com/drive/folders/1diC4GfUbojbqksWSKEs3e9OwQr4wlZZx?usp=sharing', '_blank')"
                                        class="col-5 btnresp button guidelines off" role="button"
                                        data-bs-toggle="button">GUIDELINES</button>
                                    <button onclick="daftarLomba(121)" id="btn2"
                                        class="col-5 btnresp button explode off" role="button"
                                        data-bs-toggle="button">EXPLODE</button>

                                </div>
                                <div class="read-more-container">
                                    <div class="rm-container">
                                        <p>
                                            Living Room Design merupakan sebuah lomba dimana peserta diminta untuk
                                            mendesain ruang keluarga.
                                        <p class="read-more-text">
                                            Peserta diharapkan dapat menata dan mendekorasi suatu ruangan senyaman dan
                                            semenarik mungkin serta sesuai dengan brief yang telah diberikan oleh
                                            panitia.
                                        </p>
                                        <button class="read-more-btn">Read More...</button>
                                        </p>

                                    </div>
                                </div>
                                <div class="row harga" style="margin-top : -15px">
                                    <div class="col-6">
                                        <span>60K</span>
                                        <p class="ita">Per Group</p>
                                    </div>
                                    <div class="col-6">
                                        <span>1-2</span>
                                        <p class="ita">Laju People</p>
                                    </div>
                                </div>
                            </div>
                            <div class="icon img on" style="width : 68%">
                                <img src="assets/img/Living room.png" class="img-fluid icon" alt="Responsive image">
                            </div>
                        </div>
                    </div>
                    <div class="borderline"></div>
                </div>
            </div>

            <div class="scroll-area">
                <div class="container">
                    <div class="row">
                        <!-- col-12 -> title -->
                        <div class="title">
                            VISUAL MERCHANDISING
                        </div>
                        <div class="imgresp off">
                            <img src="assets/img/visual merchandise.png" class="img-fluid" alt="Responsive image">
                        </div>
                        <div class="row">
                            <div class="col info">
                                <div class="d-grid gap-3">
                                    <button
                                        onclick="window.open('https://drive.google.com/drive/folders/1Wo1OlVSeal9qRt7St5VIddfvmG0EF5Ch?usp=sharing', '_blank')"
                                        id="btn1" class="button guidelines bnr" role="button"
                                        data-bs-toggle="button">GUIDELINES</button>
                                    <button onclick="daftarLomba(122)" id="btn1"
                                        class="button explode bnr" role="button"
                                        data-bs-toggle="button">EXPLODE</button>
                                </div>
                                <div class="row justify-content-around geresp">
                                    <button
                                        onclick="window.open('https://drive.google.com/drive/folders/1Wo1OlVSeal9qRt7St5VIddfvmG0EF5Ch?usp=sharing', '_blank')"
                                        id="btn2" class="col-5 btnresp button guidelines off" role="button"
                                        data-bs-toggle="button">GUIDELINES</button>
                                    <button onclick="daftarLomba(122)" id="btn2"
                                        class="col-5 btnresp button explode off" role="button"
                                        data-bs-toggle="button">EXPLODE</button>

                                </div>
                                <div class="read-more-container">
                                    <div class="rm-container">
                                        <p>
                                            Visual Merchandising adalah sebuah lomba dimana peserta diminta untuk
                                            mendesain tampilan dan tata letak produk pada suatu toko (window display).

                                        <p class="read-more-text">
                                            Peserta diharapkan dapat membuat desain visual merchandising yang dapat
                                            meningkatkan daya tarik produk tersebut. Peserta mengerjakan sesuai dengan
                                            brief yang telah diberikan oleh panitia.

                                        </p>
                                        <button class="read-more-btn">Read More...</button>
                                        </p>

                                    </div>
                                </div>
                                <div class="row harga" style="margin-top : -15px">
                                    <div class="col-6">
                                        <span>60K</span>
                                        <p class="ita">Per Group</p>
                                    </div>
                                    <div class="col-6">
                                        <span>1-2</span>
                                        <p class="ita">Laju People</p>
                                    </div>
                                </div>
                            </div>
                            <div class="icon img on" style="width : 68%">
                                <img src="assets/img/visual merchandise.png" class="img-fluid icon"
                                    alt="Responsive image">
                            </div>
                        </div>
                    </div>
                    <div class="borderline"></div>
                </div>
            </div>

            <div class="scroll-area">
                <div class="container">
                    <div class="row">
                        <!-- col-12 -> title -->
                        <div class="title">
                            CREDENZA DESIGN
                        </div>
                        <div class="imgresp off">
                            <img src="assets/img/credenza.png" class="img-fluid" alt="Responsive image">
                        </div>
                        <div class="row">
                            <div class="col info">
                                <div class="d-grid gap-3">
                                    <button
                                        onclick="window.open('https://drive.google.com/drive/folders/1CqooVCGVnAROD5x-sgKjlYJNsheJ9e8t?usp=sharing', '_blank')"
                                        id="btn1" class="button guidelines bnr" role="button"
                                        data-bs-toggle="button">GUIDELINES</button>
                                    <button onclick="daftarLomba(124)" id="btn1"
                                        class="button explode bnr" role="button"
                                        data-bs-toggle="button">EXPLODE</button>
                                </div>
                                <div class="row justify-content-around geresp">
                                    <button
                                        onclick="window.open('https://drive.google.com/drive/folders/1CqooVCGVnAROD5x-sgKjlYJNsheJ9e8t?usp=sharing', '_blank')"
                                        id="btn2" class="col-5 btnresp button guidelines off" role="button"
                                        data-bs-toggle="button">GUIDELINES</button>
                                    <button onclick="daftarLomba(124)" id="btn2"
                                        class="col-5 btnresp button explode off" role="button"
                                        data-bs-toggle="button">EXPLODE</button>

                                </div>
                                <div class="read-more-container">
                                    <div class="rm-container">
                                        <p>
                                            Credenza Design adalah sebuah lomba dimana peserta diminta untuk menciptakan
                                            suatu inovasi furniture yaitu Credenza atau kabinet.
                                        <p class="read-more-text">
                                            Peserta diharapkan dapat membuat desain visual merchandising yang dapat
                                            meningkatkan daya tarik produk tersebut. Peserta mengerjakan sesuai dengan
                                            brief yang telah diberikan oleh panitia.

                                        </p>
                                        <button class="read-more-btn">Read More...</button>
                                        </p>

                                    </div>
                                </div>
                                <div class="row harga" style="margin-top : -15px">
                                    <div class="col-6">
                                        <span>35K</span>
                                        <p class="ita">Per Orang</p>
                                    </div>
                                     <div class="col-6">
                                     <span>1</span>
                                     <p class="ita">Laju People</p>
                                 </div>
                                </div>
                            </div>
                            <div class="icon img on" style="width : 68%">
                                <img src="assets/img/credenza.png" class="img-fluid icon" alt="Responsive image">
                            </div>
                        </div>
                    </div>
                    <div class="borderline"></div>
                </div>
            </div>

            <div class="scroll-area">
                <div class="container">
                    <div class="row">
                        <!-- col-12 -> title -->
                        <div class="title">
                            LAMP DESIGN
                        </div>
                        <div class="imgresp off">
                            <img src="assets/img/Lamp Design.png" class="img-fluid" alt="Responsive image">
                        </div>
                        <div class="row">
                            <div class="col info">
                                <div class="d-grid gap-3">
                                    <button
                                        onclick="window.open('https://drive.google.com/drive/folders/1xBZ3tRObiLgDpIHsGuBwLCL9heyHaAbq?usp=sharing', '_blank')"
                                        id="btn1" class="button guidelines bnr" role="button"
                                        data-bs-toggle="button">GUIDELINES</button>
                                    <button onclick="daftarLomba(123)" id="btn1"
                                        class="button explode bnr" role="button"
                                        data-bs-toggle="button">EXPLODE</button>
                                </div>
                                <div class="row justify-content-around geresp">
                                    <button
                                        onclick="window.open('https://drive.google.com/drive/folders/1xBZ3tRObiLgDpIHsGuBwLCL9heyHaAbq?usp=sharing', '_blank')"
                                        id="btn2" class="col-5 btnresp button guidelines off" role="button"
                                        data-bs-toggle="button">GUIDELINES</button>
                                    <button onclick="daftarLomba(123)"
                                        onclick="daftarLomba(123)" id="btn2"
                                        class="col-5 btnresp button explode off" role="button"
                                        data-bs-toggle="button">EXPLODE</button>

                                </div>
                                <div class="read-more-container">
                                    <div class="rm-container">
                                        <p>
                                            Lamp Design merupakan suatu lomba dimana peserta diminta untuk mendesain
                                            suatu standing lamp.
                                        <p class="read-more-text">
                                            Peserta diharapkan dapat mendesain lampu dengan kegunaan dan desain yang
                                            menjual, serta sesuai dengan ketentuan brief yang telah diberikan oleh
                                            panitia.
                                        </p>
                                        <button class="read-more-btn">Read More...</button>
                                        </p>

                                    </div>
                                </div>
                                <div class="row harga" style="margin-top : -15px">
                                    <div class="col-6">
                                        <span>35K</span>
                                        <p class="ita">Per Orang</p>
                                    </div>
                                     <div class="col-6">
                                     <span>1</span>
                                     <p class="ita">Laju People</p>
                                 </div>
                                </div>
                            </div>
                            <div class="icon img on" style="width : 68%">
                                <img src="assets/img/Lamp Design.png" class="img-fluid icon" alt="Responsive image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <!-- Bootstrap -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
    <script src="js/competition.js"></script>
    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function () {
            if (window.matchMedia('(max-width: 991px)').matches) { //untuk tab ke bawah
                $('.img').removeClass('col-8');
                $('.info').removeClass('col-8').addClass('col-12').css('padding-top', '0');
                $('.img').removeClass('on').addClass('off');
                $('.btnresp').removeClass('off').addClass('on');
                $('.imgresp').removeClass('off').css('max-width', '70%');
                $('.bnr').css('display', 'none');
            } else { //untuk laptop kebawah
                document.querySelector('body').style.overflow = 'hidden';
                el_autohide = document.querySelector('.navbar');
                $(window).on('scroll', function () {
                    el_autohide.classList.remove('scrolled-down');
                    el_autohide.classList.add('scrolled-up');

                    $('.lomba-wrapper').removeClass('hide');
                    

                })
                $('.bnr').css('display', 'block');
            }

            if (window.matchMedia('(max-width: 576px)').matches) { //untuk tab ke bawah
                $('.img').removeClass('col-8');
                $('.info').removeClass('col-8').addClass('col-12').css('padding-top', '0');
                $('.img').removeClass('on').addClass('off');
                $('.btnresp').removeClass('off').addClass('on');
                $('.imgresp').removeClass('off').css('max-width', '90%');
                $('.bnr').css('display', 'none');


            }


            const parentContainer = document.querySelectorAll('.read-more-container');
            for (i = 0; i < parentContainer.length; ++i) {
                parentContainer[i], addEventListener('click', event => {
                    const current = event.target;
                    const isReadMoreBtn = current.className.includes('read-more-btn');
                    if (!isReadMoreBtn) return;

                    const currentText = event.target.parentNode.querySelector('.read-more-text');

                    // currentText.removeAttribut('display');
                    const show = currentText.classList.toggle('read-more-text--show');
                    current.textContent = current.textContent.includes('Read More') ? 'Read Less...' : 'Read More...';
                    if (show) { $('.harga').hide(); }
                    else {
                        $('.harga').show();
                    }
                    console.log("asdasd")
                })
            }
            console.log("ready!");
            $('#punggawa').css('animation', '1s ease-in-out punggawa;')




        })
        function isJson(str) {
            try {
                JSON.parse(str);
            } catch (e) {
                return false;
            }
            return true;
        }
        function daftarLomba(id_jenis){
            // cek buka tutup lomba
            $.ajax({
                type: "POST",
                url: "assets/api/cekStatusLomba.php",
                data: {
                    id:id_jenis
                },
                success: function (response) {
                    if(isJson(response)){
                        response = JSON.parse(response);
                        if(response[0] == 'tutup'){
                            Swal.fire({
                                icon: 'warning',
                                title: 'Registration for '+response[1]+" has been closed !",
                                text: 'Slot is Full. Pendaftaran untuk lomba '+response[1]+' telah ditutup karena slot telah penuh. Terima kasih Laju People!'
                            })
                        }else if(response[0] =='buka'){
                            // cek session
                            $.ajax({
                                type: "POST",
                                url: "assets/api/cekLogin.php",
                                data : '',
                                success: function (response) {
                                    if(response == 'terlogin'){
                                        // cek lombanya ada nggk
                                        $.ajax({
                                            type: "POST",
                                            url: "assets/api/cekLomba.php",
                                            data: {
                                                id:id_jenis,
                                            },
                                            success: function (response) {
                                                if(response == 'error'){
                                                    Swal.fire({
                                                        icon: 'error',
                                                        title: 'Competition not exist',
                                                    })
                                                }else{
                                                    window.location.href = 'form_pendaftaran.php?id_jenis='+response+'&msg=agni';
                                                }
                                            }
                                        });
                                        console.log('sudah ')
                                    } else{
                                        console.log('silahkan login')
                                        Swal.fire({
                                            icon: 'warning',
                                            title: 'Login First',
                                            text: 'Please login to be able to register for this competition'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                window.location.href="login.php?msg=agni";
                                            }
                                        })
                                    }
                                }
                            });
                        }else{
                            Swal.fire({
                                icon: 'error',
                                title: 'Something went wrong',
                            })
                        }
                    }else{
                        Swal.fire({
                            icon: 'error',
                            title: 'Something went wrong',
                        })
                    }
                    
                }
            });
        }

    </script>
</body>

</html>