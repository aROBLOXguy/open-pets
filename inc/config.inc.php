<?php 
	$db = mysqli_connect("localhost", "root", "", "neopets");
	date_default_timezone_set("America/Los_Angeles");
	session_start();
	//
	require_once("settings.inc.php");
	$randomevent = rand(0,1500);
	$randomevent2 = rand(0,1500);
	
	//echo $randomevent;
	$randomeveentreal = false;
	//$_SESSION["randomevent"] = 0;
	
	if ($randomevent == $randomevent2) {
		if (base64_decode($_COOKIE["randomevents"]) != 8 or !isset($_COOKIE["randomevents"])) {
		$randomeveentreal = true;
		$_SESSION["randomevent"] += 1;
		setcookie("randomevents", base64_encode($_SESSION["randomevent"]) );
		echo $_SESSION["randomevent"];
		}
	}
	
	if (isset($_SESSION["username"])) {
		$getuserdata = $db->prepare("SELECT * FROM `users` WHERE `username` = ?");
		$getuserdata->bind_param("s", $_SESSION["username"]);
		$getuserdata->execute();
		$uresult = $getuserdata->get_result();
		$urow = $uresult->fetch_assoc();
		
		$ohnpoints = $urow['neopoints'];
		if ($urow['selectedpet'] != null) {
			$petname = $urow['selectedpet'];
		} else {
			$petname = "???";
		}
		//just in case...
		$getuserdata->close();
	}
?>