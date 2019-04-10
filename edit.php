<?php
/**
 * Created by PhpStorm.
 * User: HP Florian
 * Date: 26-3-2019
 * Time: 11:39
 */
require 'header.php';
$id = $_GET['id'];
$sql = "SELECT * FROM movies WHERE id = :id";
$prepare = $db->prepare($sql);
$prepare->execute([
    ':id' => $id
]);

$movies = $prepare->fetch(PDO::FETCH_ASSOC);


?>

<form action="MoviesController.php?id=<?=$id?>" method="post">
    <input type="hidden" name="type" value="edit">
    <div class="form-group">
        <label for="">movie name</label>
        <input type="text" name="movieName">
    </div>
    <div class="form-group">
        <label for="">main character</label>
        <input type="text" name="mainCharacter">
    </div>
    <div class="form-group">
        <label for="">main actor</label>
        <input type="text" name="mainActor">
    </div>
    <div class="form-group">
        <label for="">runtime</label>
        <input type="text" name="runtime">
    </div>
    <div class="form-group">
        <label for="">director</label>
        <input type="text" name="director">
    </div>
    <div class="form-group">
        <label for="">writer</label>
        <input type="text" name="writer">
    </div>
    <input type="hidden" name="id">
    <input type="submit" value="edit film   ">
</form>