<?php
/**
 * Created by PhpStorm.
 * User: SHAWN
 * Date: 6/4/2017
 * Time: 8:40 AM
 */

if (!defined('APP')) die('error!');
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>员工信息列表</title>
</head>
<body>
<div>员工信息列表</div>
<form action="./showList.php" method="get">
    <div>快速查询：<input type="text" name="keyword"><input type="submit" value="提交"></div>
</form>
<table border="1">
    <tr>
        <th><a href="./showList.php?order=e_id&sort=<?php echo ($order) == 'e_id' ? $sort : 'desc'; ?>">ID</a></th>
        <th>姓名</th>
        <th><a href="./showList.php?order=e_dept&sort=<?php echo ($order == 'e_dept') ? $sort : 'desc'; ?>">所属部门</a>
        </th>
        <th>出生日期</th>
        <th><a href="./showList.php?order=date_of_entry&sort=<?php echo($order == 'date_of_entry' ? $sort : 'desc') ?>">入职时间</a>
        </th>
        <th width="25%">相关操作</th>
    </tr>
    <?php if (!empty($emp_info)) { ?>
        <?php foreach ($emp_info as $row) { ?>
            <tr>
                <td><?php echo $row['e_id']; ?></td>
                <td><?php echo $row['e_name']; ?></td>
                <td><?php echo $row['e_dept']; ?></td>
                <td><?php echo $row['date_of_birth']; ?></td>
                <td><?php echo $row['date_of_entry']; ?></td>
                <td>
                    <div><span>编辑&nbsp; &nbsp;删除</span></div>
                </td>
            </tr>
        <?php } ?>
    <?php } else { ?>
        <tr>
            <td colspan="6">暂无员工数据！</td>
        </tr>
    <?php } ?>
</table>
<!-- 输出分页链接 -->
<div><?php echo $page_html; ?></div>
<div><a href="./empAdd.php">添加员工</a></div>
</body>
</html>
