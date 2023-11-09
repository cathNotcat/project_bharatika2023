<?php 
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../../');
    die;
}

require_once '../../../connect.php';
require '../utils/functions.php';
header('Content-Type: application/json');

$email = $_POST['email'];
$otp = $_POST['otp'];
$data = ['success' => false, 'message' => ''];

if (strlen($otp) != 6) {
    $data['message'] = 'Kode OTP tidak valid';
    die(json_encode($data));
}

$stmt = $pdo->prepare('SELECT * FROM member WHERE email = :email');
$stmt->execute([':email' => $email]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($row['otp'] != $otp) {
    $data['message'] = 'Kode OTP salah';
    die(json_encode($data));
}

updateOTP($email, 0);

# update status verifikasi
$stmt = $pdo->prepare('UPDATE member SET verified = 1 WHERE email = :email');
$stmt->execute([':email' => $email]);

$data['success'] = true;
$data['message'] = 'Akun Anda telah diverifikasi';
die(json_encode($data));