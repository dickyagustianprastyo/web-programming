<html>
    <head>
        <title> Data Mahasiswa </title>
    </head>
    <body> 
        <?php
        $Nama = $_POST['Nama'];
        $Alamat = $_POST['Alamat'];
        $Jeniskel =$_POST['Jeniskel'];
        $Pekerjaan =$_POST['Pekerjaan'];
        $Hobi1 = $_POST['Hobo1'];
        $Hobi2 = $_POST['Hobi2'];
        $Hobi3 = $_POST['Hobi3'];
        ?>
        <table border = 1 bgcolor ="cryan">
            <tr>
                <td colspan=2 align="center"><b>Data Mahasiswa</b></td>
</tr>
<tr>
    <td>Nama</td><td><?php echo $Nama;?></td>
    <td>Alamat</td><td><?php echo $Alamat;?></td>
    <td>JenisKel</td><?php echo $JenisKel;?></td>
    <td>Pekerjaan</td><?php echo $Pekerjaan;?></td>
    <td>Hobi1</td><?php echo $Hobi1;?></td>
    <td>Hobi2</td><?php echo $Hobi2;?></td>
    <td>Hobi3</td><?php echo $Hobi3;?></td>
</tr></table>
<a href ="frominputmahasiswa.php">INPUT DATA LAGI</a>
</body>
</html>
