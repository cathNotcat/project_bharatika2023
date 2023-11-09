<style>
    @font-face {
        font-family: 'baseNeueCond';
        src: url('assets/fonts/BaseNeueTrial-CondSemBd.ttf');
    }

    @font-face {
        font-family: 'workSansSemiBold';
        src: url('assets/fonts/WorkSans-SemiBold.ttf');
    }

    .footer-container {
        width: 100%;
        background: rgb(68, 24, 72);
        background: linear-gradient(47deg, rgba(68, 24, 72, 1) 0%, rgba(59, 24, 68, 1) 39%, rgba(12, 24, 38, 1) 100%);
        padding-bottom: 20px;
        position: relative;
        overflow: hidden;
    }

    .footer-container>svg {
        position: absolute;
        inset: 0;
    }

    .logoBhara {
        width: 183px;
        margin-bottom: 20px;
        margin-left: -4px;
    }

    .footer-container li {
        list-style: none;
        font-size: 18pt;
        font-family: 'baseNeueCond', sans-serif;
        color: #F7F1D5;
    }

    .footer-container li span {
        font-family: 'workSansSemiBold', sans-serif;
    }

    .footer-container li div {
        margin-left: 5px;
        display: inline-block;
    }

    .footer-container .col:nth-child(2) {
        cursor: pointer;
    }

    .footer-container li a {
        text-decoration: none;
        color: #F7F1D5;
    }

    .footer-container #noise {
        z-index: 0;
    }

    div.konteks {
        overflow-x: hidden;
    }

    li.sponsor img {
        position: relative;
        left: -10%;
        width: 100%;
    }

    li.support img {
        position: relative;
        width: 127.5%;
    }


    div.kontainer {
        margin-inline: 31.2px;
    }


    @media screen and (max-width:767.5px) {
        .row.mb-5>.col-md-8 {
            margin-bottom: 25px;
        }

        li.support img {
            width: 61.5%;
            left: -11%;
            border-radius: 0px 25px 25px 0px;
        }
    }

    @media screen and (max-width:500px) {
        li.support img {
            width: 61.5%;
            left: -13%;
            border-radius: 0px 25px 25px 0px;
        }
    }

    @media screen and (max-width:394px) {
        li.support img {
            left: -15%;
        }

        li.sponsor img {
            left: -14%;
        }
    }

    @media screen and (max-width:337px) {
        li.support img {
            left: -17%;
        }

        li.sponsor img {
            left: -16%;
        }

    }
</style>
<div class="footer-container">
    <svg id="noise" xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='100%'
        height='4900px'>

        <filter id='n' x='0' y='0'>
            <feTurbulence type='turbulence' baseFrequency='0.75' stitchTiles='stitch' />
        </filter>

        <rect width='100%' height='4900px' fill='transparent' />
        <rect width='100%' height='4900px' filter="url(#n)" opacity='0.50' />
    </svg>
    <div class="konteks">
        <div class="kontainer" style="z-index:1;position:relative;">
            <img class="logoBhara" src="assets/img/logo putih.png" alt="">
            <div class="row">
                <div class="row mb-5">
                    <div class="col-md-8">
                        <li class="mb-2">SPONSORED BY</li>
                        <li class="sponsor"><img src="assets/img/sponsor/logo sponsor kiri.png" alt=""></li>
                    </div>
                    <div class="col-md-4">
                        <li class="mb-2">SUPPORTED BY</li>
                        <li class="support"><img src="assets/img/sponsor/logo sponsor kanan.png" alt=""></li>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <li>BHARATIKA 2023</li>
                        <li>FAKULTAS HUMANIORA DAN INDUSTRI KREATIF</li>
                        <li>SIWALANKERTO 121<span>-<span>131</li>
                        <li>SURABAYA JAWA TIMUR INDONESIA</li>
                    </div>
                    <div class="col-md-4">
                        <li><a href="https://www.instagram.com/bharatikafest/" target="_blank"><i
                                    class="fa-brands fa-instagram"></i>
                                <div><span>@</span> BHARATIKAFEST</div>
                            </a></li>
                        <li><a href="https://page.line.me/?accountId=031ucgnb" target="_blank"><i
                                    class="fa-brands fa-line"></i>
                                <div><span>@</span> 031UCGNB</div>
                            </a></li>
                        <li><a href="https://www.youtube.com/c/bharatika" target="_blank"><i
                                    class="fa-brands fa-youtube"></i>
                                <div>BHARATIKA CREATIVE DESIGN FESTIVAL</div>
                            </a></li>
                        <li><a href="#"><i class="fa-solid fa-globe"></i>
                                <div>BHARATIKAFEST<span>.</span>PETRA<span>.</span>AC<span>.</span>ID</div>
                            </a></li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>