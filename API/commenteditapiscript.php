<?php
include("/home/dusztsuv/public_html/getflix/scripts/connectdb.php");
$id_comment =  htmlspecialchars($_POST["id_comment"]);
$req = $bdd->prepare('UPDATE comment SET message =:message WHERE id_comment =:id_comment');
$req->execute(array('message' => $_POST['message'],
           
                    'id_comment' => $id_comment));

$req->closeCursor();

header("Location: /getflix/API/movieapi.php?movieId=".$_POST["movieId"]);

?>