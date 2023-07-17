<html>
    <head>
        <title> Masukan Data </title>
</head>
<body>
    <h1> Masukan Identitas Anda</h1>
    <from action ="<?php echo $_SERVER['PHP_SELF'];?>" method="Post">
    <pre>
        isikan Nama : <input type ="text" name ="Nama"/>
        isikan No Telepon : <input type ="text" name ="Telepon"/>
        isiskan Alamat :<textarea name="Alamat" rows ="5" cols="40"></textarea>
        <input type ="Sumbit" value ="Tampil"/><input type ="Reset" value="Batal"/>
</td>
<tr>
</pre>
</from>
<?php
$nama = $_POST['nama'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
if (!empty ($nama)){
    echo "Nama : $nama <br>";}
if (!empty ($telp)){
    echo "Telp : $telp <br>";}
if (!empty($Alamat)){
    echo "Alamat : $Alamat <br>";}
    ?>
</body>
</html>    