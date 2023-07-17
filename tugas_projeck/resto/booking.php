<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Mendapatkan nilai input yang dikirimkan
  $day = $_POST["day"];
  $hour = $_POST["hour"];
  $name = $_POST["name"];
  $phone = $_POST["phone"];
  $persons = $_POST["persons"];
  $create_date = date_timestamp_get(date_create());

  // kirim data ke database
  // connect ke db
  include './connectdb.php';
  $conn = connect();

  // // insert dat ke db
  $input = "INSERT INTO booking (hari, jam, nama, jlmh_orang, create_date) VALUES ('${day}','${hour}','${name}','${persons}','${create_date}')";

  // kondition jika berhasil atau gagal
  $qry = mysqli_query($conn, $input);

  if ($qry) {
    ?>
    <script language="JavaScript">
      setTimeout(() => {
        alert('Input Data Berhasil');
      }, 1000)
      setTimeout(() => {
        window.location.href = "index.php";
      }, 5000)
    </script>
    <?php
  } else {
    ?>
    <script language="JavaScript">
     setTimeout(() => {
        alert('Input Data Gagal');
      }, 1000)
      setTimeout(() => {
        window.location.href = "index.php";
      }, 5000)
      </script>
    <?php
    closeConnect($conn);
    // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

// Membuat konten PDF
 //require('tcpdf/tcpdf.php');

// Membuat objek TCPDF
//$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

// Set judul dokumen
//$pdf->SetTitle('Booking Details');

// Tambahkan halaman
// $pdf->AddPage();

// Tampilkan detail pesanan dalam PDF
// $content = '<h1>Booking Details</h1>';
// $content .= '<p><strong>Hari:</strong> ' . $day . '</p>';
// $content .= '<p><strong>Jam:</strong> ' . $hour . '</p>';
// $content .= '<p><strong>Nama:</strong> ' . $name . '</p>';
// $content .= '<p><strong>Nomor Telepon:</strong> ' . $phone . '</p>';
// $content .= '<p><strong>Jumlah Orang:</strong> ' . $persons . '</p>';

// Tambahkan konten ke dokumen PDF
// $pdf->writeHTML($content, true, false, true, false, '');

// Outputkan file PDF
// $pdf->Output('booking_details.pdf', 'I');
// exit;
