<?php
/**
 * Created by PhpStorm.
 * User: HP Florian
 * Date: 10-4-2019
 * Time: 14:43
 */
require 'header.php';

$id = $_GET['id'];
$sql = "SELECT marvelfilms.*, directors.*, directors.id AS directorID FROM directors JOIN marvelfilms ON directors.id = marvelfilms.director WHERE directors.id = :id";
$prepare = $db->prepare($sql);
$prepare->execute([
    ':id' => $id
]);
$directors = $prepare->fetch(PDO::FETCH_ASSOC);

?>
<h2><?php
    echo $directors['name']
    ?></h2>
<div class="flex-director-info">
    <div class="moviesDirected">
        <?php
        echo "<pre>";
        echo $directors['directormovies'];
        exit;
        ?>
    </div>
    <div class="directorInfo">
        <?php
        echo $directors['directorinfo'];
        ?>
    </div>
</div>