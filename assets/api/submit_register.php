<?php
require '../utils/email_functions.php';
require_once '../../../connect.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../../register.php');
    die;
}

$data = ['success' => false, 'message' => ''];


$fullname = $_POST['fullname'];
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$lineID = $_POST['lineID'];
$telp = $_POST['telp'];
$password = $_POST['password'];
$passwordConfirmation = $_POST['passwordConfirmation'];
$instansi = $_POST['instansi'];
$wa = $_POST['wa'];
$alamat = $_POST['alamat'];

# validation
if (
    $fullname === ''
    || $email === ''
    || $lineID === ''
    || $telp === ''
    || $password === ''
    || $passwordConfirmation === ''
    || $alamat === ''
    || $instansi === ''
    || $wa === ''
) {
    $data['message'] = 'Silahkan isi semua inputan!';
    die(json_encode($data));
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $data['message'] = 'Periksa kembali email Anda!';
    die(json_encode($data));
}

if (isEmailRegistered($email)) {
    $data['message'] = 'Email sudah terdaftar. Silahkan login atau gunakan email lain!';
    die(json_encode($data));
}

if (!is_numeric($telp)) {
    $data['message'] = 'Nomor telp tidak valid!';
    die(json_encode($data));
}

if (!is_numeric($wa)) {
    $data['message'] = 'Nomor WhatsApp tidak valid!';
    die(json_encode($data));
}

if (strlen($password) < 8) {
    $data['message'] = 'Panjang password minimal 8 karakter';
    die(json_encode($data));
}

if ($password !== $passwordConfirmation) {
    $data['message'] = 'Password dan konfirmasi password berbeda.';
    die(json_encode($data));
}

$password = password_hash($password, PASSWORD_DEFAULT);
$otp = rand(100000, 999999);

$stmt = $pdo->prepare("
INSERT INTO member (id, nama_lengkap, instansi, email, line_id, no_wa, no_telp, alamat, verified, otp, password)
VALUES (DEFAULT, :fullname, :instansi, :email, :lineID, :wa, :telp, :alamat, DEFAULT, :otp, :password);
");

$stmt->execute([
    ':fullname' => $fullname,
    ':email' => $email,
    ':lineID' => $lineID,
    ':telp' => $telp,
    ':otp' => $otp,
    ':password' => $password,
    ':instansi' => $instansi,
    ':wa' => $wa,
    ':alamat' => $alamat
]);

$pdo = null;

$data['success'] = true;
$data['message'] = 'Silahkan cek email Anda untuk mengisi kode OTP';

sendOTP($email, $fullname, 'Kode OTP', $otp);

echo json_encode($data);
