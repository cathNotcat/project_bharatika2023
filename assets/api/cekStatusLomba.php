<?php
include '../../../connect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_jenis = $_POST['id'];
    $stmt = $pdo->prepare("SELECT * FROM lomba_jenis where id=?");
    $stmt->execute([$id_jenis]);
    if($stmt->rowCount() > 0){
        $lomba = $stmt->fetch();
        if($lomba['buka'] == 0){
            echo json_encode(['tutup',$lomba['nama']]);
        }else if($lomba['buka'] == 1){
            echo json_encode(['buka',$lomba['nama']]);
        }else{
            echo json_encode(['error','']);
        }
    }else{
        echo json_encode(['error','']);
    }
}
?>