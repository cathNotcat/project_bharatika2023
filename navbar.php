<style>
    .scrolled-down{
        transform:translateY(-100%); transition: all 0.3s ease;
    }
    .scrolled-up{
        transform:translateY(0); transition: all 0.3s ease;
    }
    .navbar{
        /* min-height : 12vh; */
        background: rgb(87,3,91);
        background: linear-gradient(90deg, rgba(87,3,91,1) 0%, rgba(31,4,75,1) 64%, rgba(0,1,15,1) 91%);
        background-repeat: repeat-y;
    }
    .navbar-nav{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    a.nav-link{
        font-size : 12pt;
        font-family : "BaseNeue";
        font-weight: bold;
        color : #fff8d6;
        letter-spacing:1pt;
        font-stretch : 80%;
    }
    body{
        transition : all 0.35s ease;
    }
    @font-face{
        font-family : "BaseNeue";
        font-weight : bold;
        src: url("assets/fonts/BaseNeueTrial-Bold.ttf");
    }
</style>
   
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="padding:15px;">
  <div class="container-fluid">
    <ul class="me-lg-auto ms-sm-3 ms-lg-2 navbar-nav">
        <li>
            <a class="navbar-brand" href="https://bharatikafest.petra.ac.id/"><img style="height:30px" src="https://bharatikafest.petra.ac.id/2022/main/assets/logo-footer.png"></a>
        </li>
    </ul>
    <button class="navbar-toggler me-4 button-navbar" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="width:auto">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse me-3" id="navbarNav">
        <ul class="navbar-nav me-auto"></ul>
      <ul class="navbar-nav ms-sm-3 ms-lg-0">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="home.php">HOME</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" aria-current="page" href="events.php">EVENT</a>
        </li>
        <!-- Masih blm -->
        <!-- <li class="nav-item">
        <a class="nav-link" href="#">EVENT</a>
        </li> -->
        <li class="nav-item">
        <a class="nav-link" href="competition.php">COMPETITION</a>
        </li>
        <!-- Masih blm -->
        <!-- <li class="nav-item">
        <a class="nav-link" href ="#">JUDGES</a>
        </li> -->
        <li class="nav-item d-none d-lg-block">
            <a class="nav-link" href ="https://www.youtube.com/c/bharatika" target="_blank"><i class="fa-brands fa-youtube fa-xl"></i></a>
        </li>
        <li class="nav-item d-none d-sm-block d-lg-none">
            <a class="nav-link" href="https://www.youtube.com/c/bharatika" target="_blank">YOUTUBE</a>
        </li>
        <?php if((!isset($_SESSION['id'])) or ($_SESSION['id'] == "")){ ?>
            <li class="nav-item">
                <a class="nav-link" href ="login.php">LOGIN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href ="register.php">REGISTER</a>
            </li>
        <?php }else{ ?>
            <li class="nav-item">
                <a class="nav-link" href ="edit_pendaftaran.php">EDIT PENDAFTARAN</a>
            </li>
            <?php
                $stmt = $pdo->prepare("SELECT * FROM lomba_pendaftaran where id_member =? and status = 1");
                $stmt->execute([$_SESSION['id']]);
                if($stmt->rowCount() > 0):
            ?>
            <li class="nav-item">
                <a class="nav-link" href ="submitKarya.php">SUBMIT KARYA</a>
            </li>
            <?php endif; ?>
            <li class="nav-item">
                <a class="nav-link" href ="logout.php">LOGOUT</a>
            </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>
<!-- <div style="height:10000px;">hello</div> -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function(){

        el_autohide = document.querySelector('.navbar');
        
        // add padding-top to bady (if necessary)
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.marginTop = navbar_height + "px";

        if(el_autohide){ 
        var last_scroll_top = 0;

        function buka(){ //function buat buka saat scroll atas
            el_autohide.classList.remove('scrolled-down');
            el_autohide.classList.add('scrolled-up');
        }
        function tutup(){ // function buat tutup saat scroll bawah
            el_autohide.classList.remove('scrolled-up');
            el_autohide.classList.add('scrolled-down');
        }
        let time;
        function inactivityTime() { // tutup navbar misal idle selama 10 detik
            if (window.scrollY > 125.00){
                document.addEventListener('scroll', resetTimer, true); // improved; see comments
            }
            function resetTimer() {
                clearTimeout(time);
                time = setTimeout(tutup, 5000)
            }
        };

        window.addEventListener('scroll', function() { //autohide saat scroll
            let scroll_top = window.scrollY;
            // console.log(scroll_top);
            if(scroll_top <= navbar_height){
                // console.log(time);
                clearTimeout(time);
                buka();
            }
            else{
                if(scroll_top > navbar_height){
                    inactivityTime();
                }else{
                    clearTimeout(time);
                }
                if(scroll_top <= last_scroll_top) { // pengecekkan scroll ke atas
                    buka();
                }
                else { // pengecekkan scroll ke bawah
                    tutup();
                }
            }
            last_scroll_top = scroll_top;
        }); 

        }
    }); 
    $(document).ready(function(){
        let status = 0;
        $(".button-navbar").on("click",function(){
            if (status == 0){
                $(document.body).css("margin-top","254px");
                status = 1;
            }else{
                $(document.body).css("margin-top",navbar_height+"px");
                status = 0;
            }
        })
    })
</script>