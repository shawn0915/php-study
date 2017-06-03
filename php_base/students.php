<?php
/**
 * Created by PhpStorm.
 * User: SHAWN
 * Date: 6/3/2017
 * Time: 12:42 PM
 */

// 定义学生信息
$info = array(
    array('name' => 'Tom', 'age'=>12),
    array('name' => 'Jim', 'age'=>15),
    array('name' => 'Kitty', 'age'=>17)
);
?>

<!-- // 取出大于12岁的学生信息 -->
<table border="1">
    <tr><td>姓名</td><td>年龄</td></tr>
    <?php
    foreach ($info as $k):
    if ($k['age']> 12):
    ?>
        <tr><td><?php echo $k['name']; ?></td><td><?php echo $k['age']; ?></td></tr>
    <?php
    endif;
    endforeach;
    ?>
</table>

