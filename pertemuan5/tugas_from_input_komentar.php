<html>
    <head>
        <title>FORM INPUT KOMENTAR</title>
    </head>
    <body>
        <form action ="data_komentar.php" method="post">
        <h2>BUKU TAMU </h2>
        <br>
        Komentar dan Saran Anda Sangat Kami Butuhkan <br>
        Untuk Meningkatkan kualitas  situs Kami
        <br>
        <hr>
        <pre>
        NAMA ANDA      : <input type ="text" name ="nama" size ="25" maxlength="50">
        EMAIL ANDA     : <input type ="text" name ="email" size ="25" maxlength="50">
        KOMENTAR ANDA  : <textarea name ="komentar" cols="50" rows="5"></textarea>
        </pre>
        <input type="submit" value ="kirim">
        <input type="reset" value="batal">
       
</form>
</body>
</html>