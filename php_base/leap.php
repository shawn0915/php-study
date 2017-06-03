<?php
/**
 * Created by PhpStorm.
 * User: SHAWN
 * Date: 6/3/2017
 * Time: 10:33 AM
 */

$year = 2017;
if (($year % 4 == 0) && ($year % 100 != 0) || ($year % 400 == 0)) {
    echo $year . '年是闰年。';
} else {
    echo $year . '年不是闰年。';
}

?>