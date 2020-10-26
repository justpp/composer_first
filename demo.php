<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-05-10
 * Time: 16:45
 */
require_once './vendor/autoload.php';

use Practice\JustPP;
use Practice\IteratorTest;

$JustPP = new JustPP();

$JustPP->say('23');

$iterator = new IteratorTest();



foreach ($iterator as $i){
    echo $i."\n";
}

