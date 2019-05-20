<?php
/**
 * Created by PhpStorm.
 * User: HP Florian
 * Date: 17-05-2019
 * Time: 09:06
 */
require 'header.php'
?>

<form action="MoviesController.php" method="post">
    <input type="hidden" name="type" value="create">
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
        <select name="director" id="0">
            <option value="Jon Favreau">Jon Favreau</option>
            <option value="Joe Johnston">Joe Johnston</option>
        </select>

    </div>
    <div class="form-group">
        <label for="">writer</label>
        <input type="text" name="writer">
    </div>
    <input type="hidden" name="hid">
    <input type="submit" value="add new movie">
</form>
