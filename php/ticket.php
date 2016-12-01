<?php

include 'query.php';

$id = (int) $_GET["id"];
if ($id == 0) {
    die ("Error loading ticket data: id not found.");
}

$query = "SELECT * FROM tickets WHERE id=$id;";
$array = query($query);

if ($array !== FALSE && count($array) > 0) {
    foreach ($array as $ticket) {
        echo $ticket[0] . "<br>";
        echo $ticket[1] . "<br>";
        echo $ticket[2] . "<br>";
        echo $ticket[3] . "<br>";
        echo $ticket[4] . "<br>";
        echo $ticket[5] . "<br>";
    }
} else {
    die("Error loading ticket data: is there anything in the database?");
}

?>