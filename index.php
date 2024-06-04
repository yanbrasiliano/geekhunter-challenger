<?php

$vendorQueue = explode(" ", trim(fgets(STDIN)));
$initialQueue = explode(" ", trim(fgets(STDIN)));
$customersRegistered = (int)trim(fgets(STDIN));
$salespersonId = trim(fgets(STDIN));
$queue = $initialQueue;
for ($i = 0; $i < $customersRegistered; $i++) {
    array_push($queue, array_shift($queue));
}
echo $queue[0] . "\n";
echo array_search($salespersonId, $queue) . "\n";

