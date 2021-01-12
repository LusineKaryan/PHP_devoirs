<?php

	$tableau = array("Paul", "Pénélope", "Nicolas", "4", "Anastasia");
	sort($tableau);
	foreach ($tableau as $key => $val) {
		echo "[" . $key . "] - " . $val . "</br>\n";
	}

?>