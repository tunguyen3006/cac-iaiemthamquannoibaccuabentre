<?php
// Bao gồm các file cần thiết của PHPMailer
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

// Sử dụng các class của PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    // Cấu hình SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';  // Gmail SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'dangvotunguyen@gmail.com';  // Địa chỉ Gmail của bạn
    $mail->Password = 'dangvotunguyen3006';  // Mật khẩu hoặc mật khẩu ứng dụng của Gmail
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;  // Cổng gửi email của Gmail

    // Người gửi và người nhận
    $mail->setFrom('your-email@gmail.com', 'Your Name');
    $mail->addAddress('recipient@example.com', 'Recipient Name');  // Địa chỉ người nhận

    // Nội dung email
    $mail->isHTML(true);
    $mail->Subject = 'Thông Tin Liên Hệ';
    $mail->Body    = 'Đây là thông điệp liên hệ: <b>Content</b>';
    $mail->AltBody = 'Đây là thông điệp liên hệ: Content';

    // Gửi email
    $mail->send();
    echo 'Email đã được gửi thành công!';
} catch (Exception $e) {
    echo "Không thể gửi email. Lỗi: {$mail->ErrorInfo}";
}
?>
