<?php
    ob_start();
    require "../pdo.php";
    require "../../public.php";
    $passNew = rand_string(10);
    if (isset($_POST['forgotPass-email'])) {
        $email = $_POST['forgotPass-email'];

        // lấy ra user email
        $sqlEmail = "SELECT * FROM user WHERE email='$email'";
        $user = select_one($sqlEmail);

        if (isset($user['email'])) {
            $sqlUp = "UPDATE `user` SET `password`='".md5($passNew)."' WHERE email='$email'";
            pdo_execute($sqlUp);
        }else {
            header('location: ../../user/trangchu/index.php?status=0&message="Bạn nhập email không chính xác"');
            die;
        }
    }else {
        header('location: ../../user/trangchu/index.php?status=0&message="Bạn nhập email không chính xác"');
        die;
    }
?>

<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
// require 'vendor/autoload.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';//Set the SMTP server to send through
    $mail->CharSet = 'utf-8';// Khai báo để gửi mail tiếng việt
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'zerotwo13102001@gmail.com';                     //SMTP username
    $mail->Password   = 'okzuhpjmzoiinshn';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('zerotwo13102001@gmail.com', 'Metruyenchu');
    $mail->addAddress($user['email'], 'Joe User');     //địa chỉ email người nhận
    // $mail->addAddress('ellen@example.com');               // Thêm người nhận nữa
    $mail->addReplyTo('zerotwo13102001@gmail.com', 'Information'); // địa chỉ email nhận lại phẩn hồi
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('../LAP5/String.txt');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Lay lai mat khau Metruyenchu';
    $mail->Body    = 'Mật khẩu mới của bạn là: <b>'.$passNew.'</b>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    // echo 'Message has been sent';
} catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

if (isset($_POST['forgotPass-email'])) {
    header('location: ../../user/trangchu/index.php?status=1&message="Mật khẩu đã được gửi đến gmail của bạn"');
}

?>