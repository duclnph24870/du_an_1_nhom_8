<?php 
    ob_start();
    $email = $_GET['email'];
    $sql = $_GET['sql'];
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
    $mail->addAddress($email, 'Joe User');     //địa chỉ email người nhận
    // $mail->addAddress('ellen@example.com');               // Thêm người nhận nữa
    $mail->addReplyTo('zerotwo13102001@gmail.com', 'Information'); // địa chỉ email nhận lại phẩn hồi
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('../LAP5/String.txt');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Xac minh tai khoan Metruyenchu';
    $mail->Body    = 'Nhấn vào đây <a href="http://metruyenchu8.ml/du_an_hoan_thien/dao/phpMailler/xacMinh.php?sql='.$sql.'&email='.$email.'">Xác minh</a> để xác minh tài khoản';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    header('location: http://metruyenchu8.ml/du_an_hoan_thien/user/trangchu/index.php?status=1&message="Hãy vào email để xác minh tài khoản"');
    die;
    // echo 'Message has been sent';
} catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    
?>