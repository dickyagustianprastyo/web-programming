<html>
    <head>
       <title> From Registrasi </title>
</head>
<body bgcolor ='yellow'>
    <from action ="tugas03proses.php" method ="post">
        <p>
        <p>
        <b><h1> Isi Data Dibawah ini: </h1></b>
        <br>
        <pre>
            Nama :<input type= "text" nama= "nama" size="15" maxlength="50">
            Alamat :<textarea nama = "Alamat" rows = "10" cols = "40" ></textarea>
            Tempat Lahir :<input type = "text" nama = "Tempat Lahir" size = "25" maxlength = "50">
            Tanggal Lahir :<input type = "text" nama = "Tanggal Lahir" size = "25" maxlength = "50">
</pre>
Jenis Kelamin : <input type ="radio" name="Jeniskel" value="Laki-Laki">Laki-Laki
<input type ="radio" name="Jeniskel" value="Perempuan">Perempuan
<p>
    Pendidikan :
    <select name ="Pendidikan">
    <option value ="_Pilih_">
    <option value ="SD">SD
    <option value ="SMP">SMP
    <option value ="SMK/SMA">SMK/SMA
    <option value ="S1">S1
</select>
<p>
    <input type ="Submit" value ="Submit"><input type ="Reset" value ="Batal">
</from>
</body>
</html>
