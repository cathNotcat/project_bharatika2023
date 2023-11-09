<style>
    body {
        height: 100vh;
    }

    .done {
        height: auto;
    }

    div.loader {
        padding-top: 280px;
        min-height: 100vh;
        background-color: #46184A;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1500;
    }

    .containerL {
        margin: auto;
        width: 400px;
        position: relative;
    }


    h1 {
        margin-bottom: 0 !important;
    }

    .progress2 {
        border-radius: 30px;
        background-color: #fff;
    }

    .progress-bar2 {
        height: 18px;
        border-radius: 30px;
        transition: 0.4s linear;
        transition-property: width, background-color;
    }

    .progress-moved .progress-bar2 {
        background-color: #f3c623;
        animation: progress 1.5s infinite;
    }

    @keyframes progress {
        0% {
            width: 0%;
            background: red;
        }

        50% {
            background: yellow;
            box-shadow: 0 0 20px #0B64B4;
        }

        100% {
            width: 100%;
            background: green;
            box-shadow: 0 0 40px #46184A;
        }
    }




    @keyframes tulisan {
        0% {


            color: #46184A;
        }

        50% {

            color: #0B64B4;
        }


        100% {

            color: #46184A;
            /* box-shadow: 0 0 40px #f3c623; */
        }
    }

    h1.loading {
        opacity: 1;
        position: absolute;
        left: 65px;
        animation: tulisan 1.5s infinite;
        -webkit-animation: tulisan 1.5s infinite;
        -moz-animation: tulisan 1.5s infinite;
        -o-animation: tulisan 1.5s infinite;
        animation-delay: 0s;
        font-size: 32pt;
    }

    .circle {
        width: 20px;
        height: 20px;
        position: absolute;
        border-radius: 50%;
        background-color: #fff;
        left: 57%;
        transform-origin: 50%;
        animation: circle 0.4s alternate infinite ease;
    }

    .shadow {
        width: 20px;
        height: 4px;
        border-radius: 50%;
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        top: 80px;
        transform-origin: 50%;
        z-index: -1;
        left: 57%;
        filter: blur(1px);
        animation: shadow 0.4s alternate infinite ease;
    }

    @keyframes circle {
        0% {
            top: 80px;
            height: 5px;
            border-radius: 50px 50px 25px 25px;
            transform: scaleX(1.7);
        }

        40% {
            height: 20px;
            border-radius: 50%;
            transform: scaleX(1);
        }

        100% {
            top: 30px;
        }
    }

    @keyframes shadow {
        0% {
            transform: scaleX(1.5);
        }

        40% {
            transform: scaleX(1);
            opacity: 0.7;
        }

        100% {
            transform: scaleX(0.2);
            opacity: 0.4;
        }
    }

    .loading {
        margin-top: 10px;
    }

    .circle:nth-child(2) {
        left: 70%;
        animation-delay: 0.2s;
    }

    .circle:nth-child(3) {
        left: 83%;
        animation-delay: 0.3s;
    }

    .shadow:nth-child(6) {
        left: 70%;
        animation-delay: 0.2s;
    }

    .shadow:nth-child(7) {
        left: 83%;
        animation-delay: 0.3s;
    }

    @media screen and (max-width: 400px) {
        .containerL {
            width: 95%;
        }

        h1.loading {
            left: 10%;
        }

    }

    @media screen and (max-width: 365px) {
        h1.loading {
            left: 5%;
        }

    }

    @media screen and (max-width: 322px) {
        h1.loading {
            font-size: 20pt;
            left: 18%;
            top: 40px;
        }

        .circle {
            width: 10px;
            height: 10px;
        }

        .shadow {
            width: 10px;
        }

    }
    #noise{
        height:100%;
    }
</style>

<div class="loader">
    <svg id="noise"
            xmlns='http://www.w3.org/2000/svg'
            xmlns:xlink='http://www.w3.org/1999/xlink'
            width='100%' height='100%'>

                <filter id='n' x='0' y='0'>
                        <feTurbulence
                        type='turbulence'
                        baseFrequency='0.75'
                        stitchTiles='stitch'/>
                </filter>

                <rect width='100%' height='100%' fill='transparent'/>
                <rect width='100%' height='100%' filter="url(#n)" opacity='0.50'/>
            </svg>
    <div class="containerL">
        <div class="progress2 progress-moved">
            <div class="progress-bar2"></div>
        </div>
        <div class="loading">
            <h1 class="loading">Loading</h1>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="shadow"></div>
            <div class="shadow"></div>
            <div class="shadow"></div>
        </div>
    </div>
</div>

<!-- <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous"></script> -->