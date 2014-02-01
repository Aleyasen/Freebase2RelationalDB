<?php
ini_set('max_execution_time', 999999);
require_once('class.freebase.php');

$freebase = new Freebase();
$result = $freebase->mql('/people/place_lived');

echo "<pre>";
print_r($result);
echo "</pre>";

//echo "Images#: " . count($image);
//echo "Text#: " . count($text);
//echo "Images#: " . count($topic);

/*
foreach ($result['result'] as $entity) {

    $id = $entity['mid'];
    $name = $entity['name'];

    $image = $freebase->image($id);
    $text = $freebase->text($id);
    $topic = $freebase->topic($id);
    ?>
    <li>
        <h3><?php echo $name; ?></h3>
        <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>">
        <p>
            <?php  echo $text; ?> 
        </p>

        <pre>
            <?php // print_r($topic); ?> 
        </pre>  
    </li>
    <?php
}
 * 
 */
?>