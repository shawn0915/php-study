<?php
/**
 * Created by PhpStorm.
 * User: SHAWN
 * Date: 6/5/2017
 * Time: 10:38 PM
 */
if (!defined('APP')) die('error!');
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>添加员工</title>
</head>
<body>
<div>
    <h1>添加员工</h1>
    <form method="post" action="./empAdd.php"></form>
    <table>
        <tr>
            <th>姓名：</th>
            <td><input type="text" name="e_name"></td>
        </tr>
        <tr>
            <th>所属部门：</th>
            <td><input type="text" name="e_dept"></td>
        </tr>
        <tr>
            <th>出生年月：</th>
            <td><input type="text" name="date_of_birth"></td>
        </tr>
        <tr>
            <th>入职日期：</th>
            <td><input type="text" name="date_of_entry"></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="保存资料">
                <input type="reset" value="重新填写">
            </td>
        </tr>
    </table>
</div>
</body>
</html>
