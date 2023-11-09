<?php
    include "../../../connect.php";
    // header("Content-Type: application/json");
    // session_start();
    // $_SESSION['id'] = 16;

    // cek error
    // ini_set('display_errors', 1);
    // ini_set('display_startup_errors', 1);
    // error_reporting(E_ALL);
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        // cek pengumpulan karya masih buka tidak
        $stmt = $pdo->prepare("SELECT * FROM `system` where nama_system = 'upload_karya'");
        $stmt->execute();
        $status = $stmt->fetch();
        $status = $status['status'];
        if($status != 'buka'){
            echo 6;
            exit;
        }
        if(isset($_SESSION['id']) && isset($_POST['no_pes']) && isset($_POST['judulKarya']) && isset($_FILES['karya']['name'][0])) {
            $id_session = $_SESSION['id'];
            $arr = [];
            $arr['113'] = 'TVC';
            $arr['114'] = 'COP';
            $arr['115'] = 'SNP';
            $arr['111'] = 'FPS';
            $arr['112'] = 'INC';
            $arr['121'] = 'LRD';
            $arr['122'] = 'VIM';
            $arr['123'] = 'LAD';
            $arr['124'] = 'CRD';
            $arr['131'] = 'PIC';
            $arr['141'] = 'COS';
            $arr['142'] = 'M3D';
            $jenis_lomba = "";
            $sql_nama = "SELECT nama_lengkap,instansi FROM member WHERE id = :id";
            $stmt_nama = $pdo->prepare($sql_nama);
            $stmt_nama->execute(array(
                ":id" => $id_session
            ));
            $row = $stmt_nama->fetch();
            $sql_ceknopes = "SELECT COUNT(*) FROM lomba_pendaftaran WHERE no_peserta = :no_pes and id_member = :id";
            $stmt_ceknopes = $pdo->prepare($sql_ceknopes);
            $stmt_ceknopes->execute(array(
                ":no_pes" => $_POST['no_pes'],
                ":id" => $id_session
            ));
            $row_ceknopes = $stmt_ceknopes->fetchColumn();
            // cek buat apakah benar benar terdaftardi lomba tersebut
            if($row_ceknopes == 0){
                echo 5;
                exit();
            }else{
                $sql_carijenis = "SELECT id_jenislomba FROM lomba_pendaftaran WHERE no_peserta = :no_pes and id_member = :id and status = 1";
                $stmt_carijenis = $pdo->prepare($sql_carijenis);
                $stmt_carijenis->execute(array(
                    ":no_pes" => $_POST['no_pes'],
                    ":id" => $id_session
                ));
                $row_carijenis = $stmt_carijenis->fetchColumn();
                $jenis_lomba = $arr[$row_carijenis];
            }
            // $karya = "upload_karya/".$row['nama_lengkap'].'_'.$row['instansi'].'_'.$arr[intval($_POST['no_pes'])].'_'.$_POST['judulKarya'].'.zip';
            $karya = "upload_karya/".$jenis_lomba.'_'.$row['nama_lengkap'].'_'.$row['instansi'].'_'.$_POST['no_pes'].'_'.$_POST['judulKarya'].'.zip';
            $target_dir = "../../../committee/";
            $target_file = $target_dir . $karya;
            $uploadOk = 1;
            // pengecekkan apa file adalah zip
            if (pathinfo($_FILES['karya']['name'][0],PATHINFO_EXTENSION) !== 'zip'){
                echo 2;
                $uploadOk = 0;
            }
            // pengecekan file sdh ada atau blm
            else if (file_exists($target_file)) {
                // overwrite jika sudah ada
                $ts = time();
                $new_file_path = "upload_karya/".$ts.'_'.$row['nama_lengkap'].'_'.$row['instansi'].'_'.$_POST['no_pes'].'_'.$_POST['judulKarya'].'.zip';
                rename($target_file, $target_dir . $new_file_path);          

                $sql = 'SELECT * FROM upload_karya WHERE file_karya = :file_path';
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    ':file_path' => $karya
                ]);
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $id_karya = $row['id_karya'];

                $sql = 'UPDATE upload_karya SET file_karya = :file_path WHERE id_karya = :id_karya';
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    ':file_path' => $new_file_path,
                    ':id_karya' => $id_karya
                ]);
            }
            
            // kalau file belum ada
            if ($uploadOk != 0){
                $sql2 = "SELECT COUNT(*) AS count FROM upload_karya where id_member = :id and id_jenislomba = :jen  and status = 0";
                $stmt = $pdo->prepare($sql2);
                $stmt->execute(array(
                    ":id" => $id_session,
                    ":jen" => $_POST['no_pes']
                ));
                $count = $stmt->fetchColumn();

                // kalau peserta udh pernah upload dan msh waiting ( cmn jg jg aja)
                if ($count > 0) {
                    echo 3;
                }
                else {
                    // try {
                    $sql = "INSERT INTO upload_karya (no_peserta,id_member, id_jenislomba, file_karya, status) VALUES (?,?,?,?,0)";
                    $stmt = $pdo->prepare($sql);
                    $berhasil = $stmt->execute([$_POST['no_pes'],$id_session,$row_carijenis,$karya]);
                    if($berhasil){

                            $uploadSuccess = move_uploaded_file($_FILES["karya"]["tmp_name"][0], $target_file);

                            // gagal upload
                            if ($uploadSuccess == false) {
                                $sql = "DELETE FROM upload_karya WHERE no_peserta = :no_pes";
                                $stmt = $pdo->prepare($sql);
                                $stmt->execute(array(
                                    ":no_pes" => $_POST['no_pes']
                                ));
                                echo 0;
                            }else {
                                echo 1; //sukses upload
                            }
                    }
                    // // gagal insert
                    // catch(Exception $e) {
                    else{
                        echo 0;
                    }
                    // }
                }
            }
        }
        else {
            echo 4;
        }
    }
?>