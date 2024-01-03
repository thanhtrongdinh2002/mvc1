<?php
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();                              // Khai báo hàm

try {

    //Server settings
    $mail->SMTPDebug = 2;                                 // Bật thông báo lỗi nếu như bị sai cấu hình
    $mail->isSMTP();                                      // Sử dụng SMTP để gửi mail
    $mail->Host = 'smtp.gmail.com';                   // Server SMTP của mình
    $mail->SMTPAuth = true;                               // Bật xác thực SMTP
    $mail->Username = 'thanhtrongdinh10a52002@gmail.com';                 // Tài khoản email
    $mail->Password = 'kjqmuwnjyyyehdgb';                           // Mật khẩu email
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;  
                                                                                                                   // Cổng kết nối SMTP sẽ là 25
    //Recipients
    $mail->setFrom('thanhtrongdinh10a52002@gmail.com', 'Khang');           // Địa chỉ email và tên người gửi
    $mail->addAddress('dttrong2000596@student.ctuet.edu.vn', 'Khang VNH');     // Địa chỉ người nhận
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Nếu muốn gửi thêm tệp thì uncomment dòng này
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Và cả dòng này nữa nếu gửi trên một file

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';                                                 // Tiêu đề
    $mail->Body    = 'This is the HTML message body in bold!'; // Nội dung
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}