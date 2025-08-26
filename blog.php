<?php
	echo "Uploading...";
	$file=fopen("./blog/".$_POST["name"],"x") or exit("Error!\nExit.");
	echo file_put_contents("./blog/".$_REQUEST["name"],$_REQUEST["code"]);
	fclose($file);
	exit("\nExit.");

?>
