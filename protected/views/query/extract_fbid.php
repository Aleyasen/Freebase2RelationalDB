<?php

ini_set('max_execution_time', 999999);
require_once('class.freebase.php');
$freebase = new Freebase();
$queries = Query::model()->findAll();
$ind = 0;
foreach ($queries as $q) {
    if (isset($q->fbid)) {
        continue;
    }
    $topic = $freebase->topic($q->entity_id);
    //print_r($topic);
    $t = substr(str_replace("/", ".", $topic['id']), 1);
    echo $ind . ' > ' . $t . "<>" . $q->entity_id . "<br>";
    $q->fbid = $t;
    $q->save();
    //  sleep(5);
    $ind++;
//    if ($ind == 3)
//        break;
}
?>

<?php

//$service_url = 'https://www.googleapis.com/freebase/v1/topic';
//$topic_id = '/en/bob_dylan';
//$url = $service_url . $topic_id;
//$ch = curl_init();
//curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//$topic = json_decode(curl_exec($ch), true);
//echo curl_error($ch);
//curl_close($ch);
//echo $url;
//echo $topic['property']['/type/object/name']['values'][0]['value'];
?>
