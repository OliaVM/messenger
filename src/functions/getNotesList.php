<?php
function getNotesList($basa, $sql) { 
	$notes_list = $basa->query($sql);
	return $notes_list;
}
?>