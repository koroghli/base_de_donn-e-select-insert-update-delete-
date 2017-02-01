<?php
$db = mysqli_connect('localhost','root','0000','video_game_archive');
$sql = "SELECT * FROM video_game_archive WHERE name LIKE '" . $_POST['video_game'] . "%'";

$req = mysqli_query($db, $sql);
if ($req->num_rows !=0) {
  while ($data = mysqli_fetch_assoc($req)) {
    var_dump($data);
  };
}else {
echo " aucun resultat n'a été trouvé";
}
mysqli_close();
