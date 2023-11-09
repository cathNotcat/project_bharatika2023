<?php 
// session_start();
require_once '../../../connect.php';
require '../utils/functions.php';
require '../utils/email_functions.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../../login.php');
    die;
}
header('Content-Type: application/json');

$email = $_POST['email'];
$password = $_POST['password'];
$data = ['successLogin' => false, 'message' => ''];
if (!isset($_POST['recaptcha'])) {
    $data['message'] = 'Silahkan isi captcha!';
    die(json_encode($data));
}
$recaptchaResponse = $_POST['recaptcha'];

if ($email === '' || $password === '') {
    $data['message'] = 'Silahkan isi semua inputan!';
    die(json_encode($data));
}

if ($recaptchaResponse === '') {
    $data['message'] = 'Silahkan isi captcha!';
    die(json_encode($data));
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $data['message'] = 'Periksa kembali email Anda!';
    die(json_encode($data));
}

$recaptchaSuccess = check_recaptcha($recaptchaResponse);
if (!$recaptchaSuccess) {
    $data['message'] = 'Captcha gagal!';
    die(json_encode($data));
}

$stmt = $pdo->prepare("SELECT * FROM member WHERE email = :email");
$stmt->execute(['email' => $email]);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($rows) <= 0) {
    $data['message'] = 'Kredensial yang Anda berikan salah!';
    die(json_encode($data));
}

$row = $rows[0];
if (!password_verify($password, $row['password'])) {
    $data['message'] = 'Kredensial yang Anda berikan salah!';
    die(json_encode($data));
}

$data['isVerified'] = isAccountVerified($email);
if ($data['isVerified']) {
    $data['successLogin'] = true;
    $data['message'] = 'Berhasil login!';
    $_SESSION['id'] = $row['id'];
    die(json_encode($data));
}

$otp = rand(100000, 999999);
updateOTP($email, $otp);
sendOTP($email, '', 'Kode OTP', $otp);
$data['successLogin'] = false;
$data['message'] = 'Akun Anda belum diverifikasi. Silahkan lihat email Anda untuk melihat Kode OTP';

die(json_encode($data));

