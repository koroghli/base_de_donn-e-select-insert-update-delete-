<?php
$db=mysqli_connect('localhost','root','0000','video_game_archive');/*se connecter a la base de donnee avec l id et le mp*/
$sql='SELECT*FROM video_game_archive';/*recuperer les donnees*/
$req=mysqli_query($db,$sql);/*la requete sql*/
while ($data =mysqli_fetch_assoc($req)) {
  echo $data['name'];
  echo '<br>';
}
/*boucler sur toutes les elements*/
?>
