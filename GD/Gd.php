<?php
header("Access-Control-Allow-Origin: *");
$playlist = file_get_contents('Pl.json');
echo($playlist);
?>