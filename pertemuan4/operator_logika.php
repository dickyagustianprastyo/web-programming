<?php
$bil1 = 100;
$bil2 = 20;
$text1 = "PHP";
$text2 = "php";

$hasil =($bil1<>$bil2) or ($text1 == $text2);
echo "$bil1 <> $bil2 or $text1 == $text2 adalah $hasil<br>";

$hasil =! ($text1 == $text2);
echo "!($text1 == $text2) adalah $hasil";
?>