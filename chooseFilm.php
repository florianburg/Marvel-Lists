<?php
/**
 * Created by PhpStorm.
 * User: HP Florian
 * Date: 26-3-2019
 * Time: 09:27
 */
require 'header.php';

$sql = "SELECT * FROM marvelfilms ";
$query = $db->query($sql);
$marvelFilms = $query->fetchALL(PDO::FETCH_ASSOC);
?>
<h1>marvel movies</h1>
<ul>
    <?php
    foreach ($marvelFilms as $films) {
        echo "<li><a href='detailpage.php?id={$films['id']}'> {$films['filmName']} </a></li>";
    }
    ?>
</ul>
<a href="addFilm.php">Add Marvel Film</a>
