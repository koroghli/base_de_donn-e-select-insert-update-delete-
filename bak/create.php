<?php

$db = mysqli_connect('localhost','root','0000','video_game_archive');

/* Making initial search to ensure unicity of INSERT */
$searchsql = "SELECT * FROM video_game_archive WHERE name='" . $_POST['video_game_name'] . "'";
$searchreq = mysqli_query($db, $searchsql);

/* If Résult from search query is == 0, then we instert new data, if not, we cancel insertion*/
if($searchreq->num_rows == 0) {
$sql = "INSERT INTO video_game_archive (name, year, note, resume) VALUES ('" . $_POST['video_game_name'] . "', '" . $_POST['video_game_date'] . "', '" . $_POST['video_game_note'] . "', '" . $_POST['video_game_resume'] . "');";
$req = mysqli_query($db, $sql);
if($req === TRUE) {
  echo "Instertion OK";
} else {
  echo "Insertion Echouée";
}
} else {
  echo "Element déjà présent";
}
