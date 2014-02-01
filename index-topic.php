<?php

ini_set('max_execution_time', 999999);
require_once('class.freebase.php');
$freebase = new Freebase();
$queries = Query::model()->findAll();
foreach ($queries as $q) {
    $topic = $freebase->topic($q->entity_id);
    echo $topic['id'] . "<br>";
}
?>
