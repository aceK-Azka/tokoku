<?php

include("config.php");

// Function to retrieve text
function getTextDashes($text) {
	$pattern = "/\-([^-]*)\-/"; // Regex pattern to match text between dashes
	// Find the desired text
	preg_match($pattern, $text, $matches);
	return $matches[1];
}

if(isset($_POST["message"])){
	$message = mysqli_real_escape_string($connection, $_POST["message"]);
	$shopid = mysqli_real_escape_string($connection, $_POST["shopid"]);
	
	// $text = nl2br($message); // mengambil teks pesan
	// $lines = explode("\n", $text); // mengubah teks ke dalam array kalimat per baris
	// $finaltext = ""; // menyiapkan teks kosong
	// $linecount = 0; // counter baris

	// foreach($lines as $line) {
	// 	// mengubah kalimat jadi array kata
	// 	if($linecount == 2) {
	// 		$thismenu = getTextDashes($line);
	// 		// ambil nama site per pesanan ($site2) dan judul menu ($title)
	// 		$sql = "SELECT tokoid FROM $tableposts WHERE title REGEXP '.*$thismenu.*'";
	// 		$result = mysqli_query($connection, $sql);
	// 		if (mysqli_num_rows($result) > 0) {
	// 			$row = mysqli_fetch_assoc($result);
	// 			$sql = "SELECT id FROM $tableshop WHERE id = " . $row["tokoid"];
	// 			$result = mysqli_query($connection, $sql);
	// 			$row = mysqli_fetch_assoc($result);
	// 			$finaltext = $row["id"];
	// 			$linecount++;
	// 			break;
	// 		}
	// 		$linecount++;
	// 	}
	// 	$linecount++;
	// }

	$currenttime = round(microtime(true) * 1000);
	mysqli_query($connection, "INSERT INTO $tablemessages (date, tokoid, message) VALUES ('$currenttime', '$shopid', '$message')");
}

?>