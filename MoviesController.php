<?php
/**
 * Created by PhpStorm.
 * User: HP Florian
 * Date: 26-3-2019
 * Time: 10:03
 */
    if( $_SERVER['REQUEST_METHOD'] != 'POST' ){
        header('location: chooseFilm.php');
        exit;
    }
    require 'config.php';
    if ($_POST['type'] == 'create') {
        $movieName = $_POST['movieName'];
        $mainCharacter = $_POST['mainCharacter'];
        $mainActor = $_POST['mainActor'];
        $runtime = $_POST['runtime'];
        $director = $_POST['director'];
        $writer = $_POST['writer'];

        $sql = "INSERT INTO marvelfilms (filmName, mainCharacters, mainActors, runtime, director, writer) VALUES (:filmName, :mainCharacters, :mainActors, :runtime, :director, :writer)";
        $prepare = $db->prepare($sql);
        $prepare->execute([
            ':filmName' => $movieName,
            ':mainCharacters' => $mainCharacter,
            ':mainActors' => $mainActor,
            ':runtime' => $runtime,
            ':director' => $director,
            ':writer' => $writer
        ]);
        $msg = "Movie succesfully added";
        header("location: chooseFilm.php?msg=$msg");
        exit;
    }
    if ($_POST['type'] == 'delete'){
        $id = $_GET['id'];
        $sql = "DELETE from marvelfilms WHERE id = :id";
        $prepare = $db->prepare($sql);
        $prepare->execute([
            ':id' => $id
        ]);

        $msg = 'movie is succesfully deleted';
        header("location: chooseFilm.php?msg=$msg");
        exit;
    }
    if ($_POST['type'] == 'edit') {

        $movieName = $_POST['filmName'];
        $mainCharacter = $_POST['mainCharacters'];
        $mainActor = $_POST['mainActors'];
        $runtime = $_POST['runtime'];
        $director = $_POST['director'];
        $writer = $_POST['writer'];

        $sql = "UPDATE marvelfilms SET
            filmName = :filmName,
            mainCharacters = :mainCharacters,
            mainActors = :mainActors,
            runtime = :runtime,
            director = :director,
            writer = :writer
            WHERE id = :id";

        $prepare = $db->prepare($sql);
        $prepare->execute([
            ':filmName' => $movieName,
            ':mainCharacters' => $mainCharacter,
            ':mainActors' => $mainActor,
            ':runtime' => $runtime,
            ':director' => $director,
            ':writer' => $writer
        ]);

        $msg = "film is succesvol aangepast";
        header("location: chooseFilm.php?msg=$msg");
        exit;
    }