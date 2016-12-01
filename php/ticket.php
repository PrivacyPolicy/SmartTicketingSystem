<?php

include 'query.php';

$id = (int) $_GET["id"];
if ($id == 0) {
    die ("Error loading ticket data: id not found.");
}

echo "You got that ticket yo<br><br>";

$json = query("SELECT ticket_id, department_id, client_id, title, description, assignee_id, open_status, category, priority FROM tickets WHERE ticket_id=$id;");

if ($json) {
    echo $json["title"] . "\n";
    echo $json["description"] . "\n";
    echo $json["open_status"] . "\n";
    echo $json["category"] . "\n";
    echo $json["assignee_id"] . "\n";
}

?>