<html>
    <head>
        <title> Input Data Mahasiswa </title>
    </head>
    <body bgcolor='oren'>
    <from action ="prosesinputmahasiswa.php"method="post">
        <b>Pengelolaan Data Mahasiswa</b>
        <br>
        <pre>
            Nama : <input type"text" name="Nama" size="25" maxlength="50">
            Alamat : <input type"text name="Nama" size="25" maxlength="50">
        </pre>
        Jenis Kelamain : 
        <input type"radio" name="jeniskel" value="Laki-Laki">Laki - Laki
        <input type"radio name="jeniskel" value+="Perempuan">Perempuan
        <p>
        Pekerjaan :
        <select name="Pekerjaan">
            <option value="-pilih">
            <option value="Pelajar">Pelajar
            <option value="Karyawan">Karyawan
            <option value="Wirausaha">Wirausaha
            <option value="Lain-Lain">Lain-Lain
        </select>
        <p>
            Hobi :
            <input type"chekbox" name="hobi1" value="Olahraga">Olahraga
            <input type"chekbox" name="hobi2" value="Musik">Musik
            <input type"chekbox name="hobi3" value="Jalan-Jalan">Jalan-Jalan
        <p>
            <input type="submit" value="kirim"><input type="reset" value="Batal">
    </from>
    </body>
</html>