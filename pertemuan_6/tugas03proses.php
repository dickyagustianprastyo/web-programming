<html>
    <head>
        <title> Data Registrasi</title>
</head>
<body>
<p>
    <b>Data Registrasi</b>
<p>
    <?php
    $Nama = $_POST['Nama'];
    $Alamat = $_POST['Alamat'];
    $TempatLahir = $_POST['Tempatlahir'];
    $TanggalLahir = $_POST['TanggalLahir'];
    $JenisKelamin = $_POST['JenisKelamin'];
    $Pendidikan = $_POST['Pendidikan'];
    ?>
    <table border = 1 bgcolor ="pink">
    <tr>
        <td colspan = 2 align = "center" ><b> Registrasi </b></td>
    </tr>
    <tr>
        <td>Nama</td><td><?php echo $Nama; ?></td>
        <td>Alamat</td><td><?php echo $Alamat; ?></td>
        <td>TempatLahir</td><?php echo $TempatLahir; ?></td>
        <td>TanggalLahir</td><?php echo $TanggalLahir; ?></td>
        <td>JenisKelamin</td><?php echo $JenisKelamin; ?></td>
        <td>Pendidikan</td><?php echo $Pendidikan; ?></td>
</tr></table>
<a href="tugas03.php">BACK TO HOME</a>
</body>
</html>   