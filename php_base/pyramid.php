<?php
/**
 * Created by PhpStorm.
 * User: SHAWN
 * Date: 6/3/2017
 * Time: 10:41 AM
 */

// 初始化金字塔的当前行数为第1行
$line = 1;
// 设定金字塔总行数
$count = 5;

// 使用while循环判定当前行是否小于等于该金字塔的总行数5
while ($line <= $count) {
    // 初始化金字塔中每行的空格和星星的数量
    $empty_pos = $star_pos = 1;
    // 计算：每行星星前面的空格数 = 金字塔的总行数 - 当前所在行数
    $empty = $count - $line;
    // 计算：每行星星数 = 当前行数 * 2 - 1
    $star = 2 * $line - 1;
    // 循环输出金字塔中当前行星星前的空格
    while ($empty_pos <= $empty) {
        echo '&nbsp;';
        // $empty_pos + 1
        ++$empty_pos;
    }
    // 循环输出金字塔中当前行的星星
    while ($star_pos <= $star) {
        echo '*';
        ++$star_pos;
    }
    echo '<br>';
    ++$line;
}

