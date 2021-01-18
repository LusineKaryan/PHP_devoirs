<?php

	$tableau = array("Paul", "Pénélope", "Nicolas", "4", "Anastasia");
	sort($tableau);
	echo "<ul>";
	foreach ($tableau as $key => $val) {
		echo "<li>$key " . $val . "</li>";
	}
	echo "</ul>";
?>