<?php
include '../../../connect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_SESSION['id'])){
        echo 'terlogin';
    }else{
        echo 'blmlogin';
    }
}

?>