<?php
$randomNumbers = [];
for($i=0; $i<= 10; $i++){
    $randomNumbers[] = rand(1,100);
}

$randomCopy = array_replace([], $randomNumbers);

$randomNumbers[count($randomNumbers)-1] = -7;

echo implode(',',$randomNumbers);
echo PHP_EOL;
echo implode(',', $randomCopy);
echo PHP_EOL;
