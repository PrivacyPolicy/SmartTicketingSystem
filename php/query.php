<?php

function query($value) {
    $linkID = mysql_connect("localhost", "root", file_get_contents("passwords.txt")) or die("Could not connect to host.");
    mysql_select_db("ticketing_test", $linkID) or die("Could not find database.");
    $query = $value;
    $rows = array();
    $count = 0;
    while ($row = mysql_fetch_assoc($query)) {
        $array = array($row["id"], $row["subject"], $row["user_id"], $row["asignee_id"], $row["priority"], $row["description"]);
        $rows[] = $array;
        $count++;
    }
    return ('{"recordsTotal":' . (string) $count . ',"data":' . str_replace("}", "]", str_replace("{", "[", json_encode($rows))) . "}");
}

?>