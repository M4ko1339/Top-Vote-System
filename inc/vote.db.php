<?php

require dirname(__DIR__) . '/inc/vote.settings.php';

try
{
    $vcon = new PDO('mysql:host=' . $vconfig['HOST'] . ';dbname=' . $vconfig['DB'] . ';charset=utf8', $vconfig['USER'], $vconfig['PASS']);
}
catch (PDOException $e)
{
    die($e->getMessage());
}
