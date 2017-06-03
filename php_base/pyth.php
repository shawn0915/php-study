<?php
/**
 * Created by PhpStorm.
 * User: SHAWN
 * Date: 6/3/2017
 * Time: 11:18 AM
 */

echo '<table border="1"';
// 循环九九乘法表的层数
for ($i = 1; $i < 10; ++$i) {
    // 以表格形式输出乘法口诀
    echo '<tr>';
    // 循环每层中单元格的个数
    for ($j = 1; $j < $i; ++$j) {
        // 计算并输出每层中的乘法
        echo "<td> {$j} * {$i} = " . $j * $i . "</td>";
    }
    echo '</tr>';
}
echo '</table>';