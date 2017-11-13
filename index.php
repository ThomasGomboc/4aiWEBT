<?php
/**
 * Created by PhpStorm.
 * User: Thomas Gomboc
 * Date: 13.11.2017
 * Time: 11:50
 */

require_once 'vendor/autoload.php';

$Movie = new HTL3R\KungFuMovies("Bruce Lee -Der Mann mit der Todeskralle", 5, "https://www.youtube.com/watch?v=80wXmIcyZwk", "Bruce Lee");

echo isset($_GET['format']) ? $_GET['format'] : "no format given";
