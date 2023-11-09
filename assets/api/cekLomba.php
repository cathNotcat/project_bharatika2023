<?php
include '../../../connect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_jenis = $_POST['id'];
    $stmt = $pdo->prepare("SELECT * FROM lomba_jenis where id=?");
    $stmt->execute([$id_jenis]);
    if($stmt->rowCount() > 0){
        $lomba = $stmt->fetch();
        echo $lomba['id'];
    }else{
        echo 'error';
    }
}
?>