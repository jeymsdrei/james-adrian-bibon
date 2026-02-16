<?php
// find everyone older than 50 yrs old
$data = file_get_contents("dataset.json");
$data = json_decode ($data);
foreach ($data as $person) {
    if ($person->age > 50) {
        echo $person->id . " - " .
             $person->first_name . " " .
             $person->middle_name . " " .
             $person->last_name .
             " (" . $person->age . " years old)";
        echo "\n";
    }
}
?>