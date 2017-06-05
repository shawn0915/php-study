<?php
/**
 * Created by PhpStorm.
 * User: SHAWN
 * Date: 6/5/2017
 * Time: 10:21 PM
 */

header('Content-type:text/html;charset=utf-8');

require './public_function.php';

// 判断是否有表单提交
if (!empty($_POST)) {
    // 声明变量，用来保存字段信息
    $fields = array('e_name', 'e_dept', 'date_of_birth', 'date_of_entry');
    // 声明变量，用来保存值信息
    $value = array();
    // 遍历$fields，获取输入员工数据的k,v
    foreach ($fields as $k => $v) {
        $data = isset($_POST[$v]) ? $_POST[$v] : '';
        if ($data == '') die($v . '字段不能为空');
        $data = safeHandle($data);
        // 把字段使用反引号包裹，赋值给$fields数组
        $fields[$k] = "`$v`";
        // 把值使用单引号包裹，赋值给$values数组
        $values[] = "'$data'";
    }
    // 将$fields数组以逗号连接，赋值给$fieds，组成insert语句中的字段部分
    $fields = implode(',', $fields);
    // 将$values数据以逗号连接，赋值给$values，组成insert语句中的值部分
    $values = implode(',', $values);
    // 最后把$fields和$values拼接到insert语句中，注意要指定表名
    $sql = "insert into emp_info ($fields) VALUES ($values)";

    // 执行SQL
    if ($res = query($sql)) {
        // 成功时返回到showList.php
        header('Location: ./showList.php');
        // 停止脚本
        die;
    } else {
        // 执行失败
        die('员工添加失败');
    }
}
// 没有表单提交时，显示员工添加页面
define('APP', 'shawn');

require './add_html.php';