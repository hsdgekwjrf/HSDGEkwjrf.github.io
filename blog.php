<?php
	echo "Uploading...";
	$file=fopen("./blog/".$_POST["name"],"x") or exit("Error!\nExit.");
	echo file_put_contents("./blog/".$_POST["name"],$_POST["code"]);
	fclose($file);
	exit("\nExit.");

?>

