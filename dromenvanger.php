<?php

$bucketlist = array();

$users = array();

$amount = readline("Hoeveel vrienden zal ik vragen om hun droom?");

for ($i = 1; $i <= $amount; $i++) {
    echo "Wat is jouw naam?";
    $name = readline();
    $users[] = $name;
    echo "Hoeveel dromen ga je opgeven?";
    $dream = readline();
    $bucketlist[] = $name. " heeft als droom: ".$dream;
}

foreach ($bucketlist as $list) {
    echo $list."\n";
    }
