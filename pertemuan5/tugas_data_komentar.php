<!DOCTYPE html>
<html>
    <head>
        <title>DATA KOMENTAR</title>
    </head>
    <body>
    <?php
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $komentar=$_POST['komentar'];
    echo"<h1>Data Komentar Anda</h1>";
    echo"<hr>";
    echo"NAMA ANDA            : $nama <br>    "; 
    echo"EMAIL ANDA           : $email <br>   "; 
    echo"KOMENTAR ANDA        : $komentar <br>"; 
    ?>

    <a href="form_input_komentar.php">INPUT DATA LAGI </a>
    
</body>
</html>