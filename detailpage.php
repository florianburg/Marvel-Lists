<?php
/**
 * Created by PhpStorm.
 * User: HP Florian
 * Date: 26-3-2019
 * Time: 10:29
 */
require 'header.php';
$id = $_GET['id'];


$sql = "SELECT marvelfilms.*, directors.*, directors.id AS directorID FROM directors JOIN marvelfilms ON directors.id = marvelfilms.director WHERE marvelfilms.id = :id";
$query = $db->prepare($sql);
$query->execute([
        'id' => $id
]);
$movie = $query->fetch(PDO::FETCH_ASSOC);

    echo "<h1> {$movie['filmName']} </h1>";
    ?>
<p>main character:
    <?php
    echo "{$movie['mainCharacters']}";
    ?>
</p>
<p>main actor:
    <?php
    echo "{$movie['mainActors']}";
    ?>
</p>
<p>runtime:
    <?php
    echo "{$movie['runtime']}";
    ?>
</p>
<?php
echo"<a href='directorPage.php?id={$movie['directorID']}'>director: ";
    echo "{$movie['name']}";
echo "</a>";
?>
<p>writer:
    <?php
    echo "{$movie['writer']}";
    ?>
</p>

<form action="MoviesController.php?id=<?=$id?>" method="post">
    <input type="hidden" name="type" value="delete">
    <input type="submit" id="submit-login" value="delete movie">
</form>
<a href="edit.php?id=<?=$id?>">edit this contact</a>