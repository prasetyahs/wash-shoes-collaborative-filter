<?php
include __DIR__ . "/vendor/autoload.php";

use Tigo\Recommendation\Recommend; // import class
$artistRatings = array(
    "Abe" => array(
        "Quick Clean" => 5,
        "Deep Clean Easy" => 4,
        "Deep Clean Hard" => 2,
        "Toddler Shoes" => 1,
        "White Shoes" => 1,
        "Leather Care" => 1,
    ),
    "Blair" => array(
        "Quick Clean" => 2,
        "Deep Clean Easy" => 2,
        "Deep Clean Hard" => 1,
        "Toddler Shoes" => 5,
        "White Shoes" => 5,
        "Leather Care" => 2,
        "Unyellowing" => 5
    ),
    "Clair" => array(
        "Quick Clean" => 5,
        "Deep Clean Easy" => 2,
        "Deep Clean Hard" => 3,
        "Toddler Shoes" => 5,
        "White Shoes" => 5,
        "Leather Care" => 2,
        "Unyellowing" => 2
    ),
    "Pras" => array(
        "Quick Clean" => 2,
        "Deep Clean Easy" => 3,
        "Deep Clean Hard" => 3,
        "Toddler Shoes" => 4,
        "Leather Care" => 2,
        "Unyellowing" => 1
    ),
);

print_r($artistRatings);die;
$data = new \stojg\recommend\Data($artistRatings);
foreach ($artistRatings as $key => $v) {
    $recommendations = $data->recommend($key, new \stojg\recommend\strategy\Manhattan());
    echo "Rekomendasi untuk '$key' : ";
    foreach($recommendations as $recommendations){
        print_r($recommendations['key']);
    }
    echo "<br><br>";
}
