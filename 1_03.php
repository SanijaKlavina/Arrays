<?php
$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];
$chosenNumber = readline("Enter the value to search for: ");

echo in_array($chosenNumber, $numbers) ? 'Your chosen value is in': 'Error';
echo PHP_EOL;

