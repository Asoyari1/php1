
<?php
if(isset($_POST['lähetä'])){

$etunimi = $_POST["Etunimi"];
$sukunimi = $_POST["Sukunimi"];
$opisnumero = $_POST["numero"];
$tunnus = $_POST["tunnus"];
$kurssi = $_POST["kurssi"];
$ajankohta = $_POST["aika"];
$opettaja = $_POST["opettaja"];

echo "<br>";
echo "Etunimi: " . $etunimi. "<br><br>";
echo "Sukunimi: " .$sukunimi . "<br><br>"; 
echo "Opiskelijanumero: " . $opisnumero. "<br><br>";
echo "Ryhmätunnus: " . $tunnus. "<br><br>";
echo "Kurssin nimi: " . $kurssi. "<br><br>";
echo "Kurssin ajankohta: ". $ajankohta. "<br><br>";
echo "Opettaja: " .$opettaja. "<br><br>"; 

    $from = "testi98@gmail.com";
    $to = "sähköposti@gmail.com";
    $subject = "Opiskelijan tiedot";
    $message = "Etunimi: ".$etunimi."\n"."Sukunimi: ".$sukunimi."\n"."Opiskelijanumero: ".$opisnumero."\n"."Ryhmätunnus: ".$tunnus."\n"."Kurssi: ".$kurssi."\n"."Kurssin ajankohta: ".$ajankohta."\n"."Opettaja: ".$opettaja;
    $headers = "From:" . $from;
	
    if(mail($to,$subject,$message, $headers)) {
		echo "The email message was sent to: " .$to;
    } else {
    	echo "The email message was not sent.";
    }
}
?>