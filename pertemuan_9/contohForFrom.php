<html>
    <head>
        <title> Pengulangan FOR </title>
</head>
<body>
    Penggunaan pada form:
    <br>
    <?php
    echo"<form name=form1 method=post>";
    echo"Tanggal";
    echo"<select name=Tanggal>";
    for($Tanggal = 1 ; $Tanggal <= 31; $Tanggal++)
    {echo "<option value=".$Tanggal.">".$Tanggal."</option>";
    }
    echo"</select>";
    echo"</form>";
    ?>
</body>
</html>
