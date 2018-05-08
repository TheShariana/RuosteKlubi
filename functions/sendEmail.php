<?php
header( "refresh:5;url=index.php" );
$to = 'rust@pelikaista.fi';
$subject = 'Ruoste Klubi Palaute';

if (empty($_POST["name"])) {
	$name = "Anonyymi Ahven";
} else {
	$name = $_POST['name'];
}
$comments = $_POST['comments'];

$message = '
<html>
	<head>
		<title>Ruoste Klubin Palaute</title>
	</head>
	<body>
		<h4>Lähettäjä:</h4>
		<p>'.$name.'</p>
		<h4>Palaute:</h4>
		<p>'.$comments.'</p>
		<p>P.S. Shariana Rocks</p>
	</body>
</html>';

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'From: rust@pelikaista.fi' . "\r\n";

$send_contact=mail($to, $subject, $message, $headers);
if($send_contact){
	echo "Kiitos palautteestasi. Ohjaamme sinut takaisin 5 sekunnin kuluttua.";
}
else {
	echo "Jokin meni pieleen. Emme valitettavasti pystyneet toimittamaan palautettasi.";
}
?>
