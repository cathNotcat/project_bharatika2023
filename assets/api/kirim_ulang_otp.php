<?php 
require '../utils/functions.php';
require '../utils/email_functions.php';
require_once '../../../connect.php';
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../../.');
    die;
}

$email = $_POST['email'];
$data = ['success' => false, 'message' => ''];

if ($email == '') {
    http_response_code(400);
    $data['message'] = 'email kosong';
    die(json_encode($data));
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    $data['message'] = 'email tidak valid';
    die(json_encode($data));
}

$otp = rand(100_000, 999_999);
updateOTP($email, $otp);
if (sendOTP($email, '', 'Kode OTP', $otp)) {
    $data['success'] = true;
    $data['message'] = 'Kode OTP berhasil dikirim ke email Anda';
} else {
    $data['success'] = false;
    $data['message'] = 'Kode OTP gagal dikirim ke email Anda';
}

die(json_encode($data));
?>