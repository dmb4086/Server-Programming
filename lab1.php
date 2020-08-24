<?php



$testScores = array(87, 75, 93, 95);

$sum = 0;

for ($i=0; $i < count($testScores) ; $i++) {

    $sum += $testScores[$i];
}

$average = $sum/count($testScores);

echo "Average test scores are: " , $average;
