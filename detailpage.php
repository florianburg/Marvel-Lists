<?php
/**
 * Created by PhpStorm.
 * User: HP Florian
 * Date: 26-3-2019
 * Time: 10:29
 */
require 'header.php';
$id = $_GET['id'];// zoek uit waarom je eerst deze neer zet
$sql = "SELECT * FROM movies WHERE id = :id";
$prepare = $db->prepare($sql);
$prepare->execute([
    ':id' => $id
]);
//$prepare is dus nu een variable die de placeholder (:id) als een variable maakt uit de DB
$movie = $prepare->fetch(PDO::FETCH_ASSOC);

?>
<h1><?php
    echo $movie['movieName'];
    ?></h1>
<p>main character:
    <?php
    echo $movie['mainCharacter'];
    ?>
</p>
<p>main actor:
    <?php
    echo $movie['mainActor'];
    ?>
</p>
<p>runtime:
    <?php
    echo $movie['runtime'];
    ?>
</p>
<p>director:
    <?php
    echo $movie['director'];
    ?>
</p>
<p>writer:
    <?php
    echo $movie['writer'];
    ?>
</p>

<form action="MoviesController.php?id=<?=$id?>" method="post">
    <input type="hidden" name="type" value="delete">
    <input type="submit" id="submit-login" value="delete movie">
</form>
<a href="edit.php?id=<?=$id?>">edit this contact</a>