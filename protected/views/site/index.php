<?php
mysql_connect("localhost", "root", "");
mysql_select_db("test");
require_once('sphinxapi.php');
$s = new SphinxClient;
$s->setServer("127.0.0.1", 9312); // NOT "localhost" under Windows 7!
$s->setMatchMode(SPH_MATCH_EXTENDED);
//$s->SetLimits(0, 10);
//$s->SetSortMode(SPH_SORT_EXPR, "@weight + ( user_karma + ln(pageviews) )*0.1");
//$s->SetSortMode( SPH_SORT_EXPR, "100*bm25a(2.0,0.75)" );
//$s->SetRankingMode(SPH_RANK_BM25);
//$s->SetRankingMode(SPH_RANK_EXPR, "1000*bm25a(2.0,0.75)");
//$s->SetRankingMode(SPH_RANK_EXPR, "1000*bm25a(2.0,0.5)");
$s->SetRankingMode(SPH_RANK_PROXIMITY_BM25);
$result = $s->Query("w1","test2");
//$queries = Query::model()->findAll("semantic_type=:semantic_type", array(":semantic_type" => "person"));
//foreach ($queries as $q) {
//    foreach ($q->statements as $s) {
//        if ($s->attribute == "") {
//            
//        }
//    }
//}
//echo $query->text . "<br>";
//$result = $s->Query("Lincoln Abraham Grove", "ind_vi_person");
if ($result['total'] > 0) {
    $no = 0;
    echo 'Total: ' . $result['total'] . "<br>\n";
    echo 'Total Found: ' . $result['total_found'] . "<br>\n";
    echo '<table>';
    echo '<tr><td>No.</td><td>ID</td><td>Group ID</td><td>Group ID 2</td><td>Date Added</td><td>Title</td><td>Content</td></tr>';
//    echo "<pre>";
//    //print_r($result['matches']);
//    echo "</pre>";
//    foreach ($result['matches'] as $id => $otherStuff) {
//        $obj = Person::model()->findByPK($id);
//        if (isset($obj))
//            echo "((" . $id . ")) " . $obj->name . "  [" . $otherStuff['weight'] . "] " . $obj->description . "<br><br>";
//        else
//            echo 'not person' . $id . "<br>";
//    }
//    return;
    foreach ($result['matches'] as $id => $otherStuff) {
        $row = mysql_fetch_array(mysql_query("select * from mydocs where id = $id"));
        extract($row);
        ++$no;
        echo "<tr><td>$no</td><td>$id</td><td>$content</td><td>";
        echo $otherStuff['weight'] . "</td></tr>";
    }
//    foreach ($result['matches'] as $id => $otherStuff) {
//        $row = mysql_fetch_array(mysql_query("select * from documents where id = $id"));
//        extract($row);
//        ++$no;
//        echo "<tr><td>$no</td><td>$id</td><td>$group_id</td><td>$group_id2</td><td>$date_added</td><td>$title</td><td>$content</td><td>";
//        echo $otherStuff['weight'] . "</td></tr>";
//    }
    echo '</table>';
} else {
    echo 'No results found';
}
?>

