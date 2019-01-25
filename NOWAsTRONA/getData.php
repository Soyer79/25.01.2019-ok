<?php
include 'logMeteo.php';
$typ = $_GET['nazwa'];
$b = $_GET['mian'];
$polaczenie = new mysqli($host, $db_user, $db_pass, $db_name);
if($polaczenie->connect_errno!=0){
    die("Error: ".$polaczenie->connect_errno."Opis: ".$polaczenie->connect_error);
}
$sqlOdczyt="SELECT aktualna FROM meteo WHERE czujnik = '$typ'";
$odczyt=$polaczenie->query($sqlOdczyt);
$row = $odczyt->fetch_row();
$odczyt->close();
$result = $row[0];

echo $result." ".$b;
?>