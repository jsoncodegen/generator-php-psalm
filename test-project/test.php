<?php

$it = json_decode('{}');
$it->{true} = 'hey';
var_dump($it);