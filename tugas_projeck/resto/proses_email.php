<?php
// ini wajib dipanggil paling atas
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// //ini sesuaikan foldernya ke file 3 ini
require './vendor/phpmailer/phpmailer/src/Exception.php';
require './vendor/phpmailer/phpmailer/src/PHPMailer.php';
require './vendor/phpmailer/phpmailer/src/SMTP.php';

// Wajib dipanggil di paling atas
try {
    // Konfigurasi server email
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = 'e9c16ca1be2a25';
    $phpmailer->Password = '18fd187e244dc0';

    // Set penerima, pengirim, subjek, dan isi email
    $phpmailer->setFrom('sandwich@example.com', 'Mailer');
    $phpmailer->addAddress('dickyagustian1998@gmail.com', 'Joe User');
    $phpmailer->addReplyTo('info@example.com', 'Information');
    $phpmailer->Subject = $judul;
    $phpmailer->Body = $pesan;

    // Kirim email
    $phpmailer->send();
    echo 'Email berhasil dikirim.';
} catch (error) {
    echo $phpmailer->ErrorInfo;
    echo "Email gagal dikirim. Error:", $phpmailer->ErrorInfo;
}
?>