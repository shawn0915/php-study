<?php
/**
 * Created by PhpStorm.
 * User: SHAWN
 * Date: 6/4/2017
 * Time: 11:01 PM
 */

/*
 * 初始化数据库连接
 */
function dbInit()
{
    // connect mysql
    $link = mysqli_connect($host = 'localhost', $user = 'root', $password = '123456', $database = 'php_dev', $port = '3307');

    // 判断是否连接成功
    if (!$link) {
        die('connect fail!' . mysqli_connect_error());
    }

    return $link;
//echo 'success!';

//选择字符集，选择数据库
//    mysqli_query($link, 'set names utf8');
//    mysqli_query($query = 'use php_dev');
//    mysqli::query('set names utf8');

}

/*
 * 执行SQL的函数
 * @param string $sql 待执行的sql
 * @return mixed 失败返回false，成功时，如果是查询语句返回结果集，否则返回true
 */
function query($sql)
{
    $link = dbInit();
    if ($result = mysqli_query($link, $sql)) {
        // 执行成功
        return $result;

    } else {
        // 执行失败，显示错误信息以便于调试程序
        echo 'SQL执行失败:<br>';
        echo '错误的SQL为:', $sql, '<br>';
        echo '错误的code为:', mysqli_errno(), '<br>';
        echo '错误的info为:', mysqli_error(), '<br>';

    }
}

/*
 * 处理结果集中有多条数据的函数
 * @param string $sql 待执行的SQL
 * @return array 返回遍历结果集的二维数组
 */
function fetchALL($sql)
{
    // 执行query()函数
    if ($result = query($sql)) {
        // 执行成功
        // 遍历结果集
        $rows = array();
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $rows[] = $row;
        }
        // 释放结果集资源
        mysqli_free_result($result);
        return $rows;
    } else {
        // 执行失败
        return false;
    }
}

/*
 * 处理结果集中只有一条数据的函数
 * @param string $sql 待执行的SQL语句
 * @return array 返回结果集处理后的一维数组
 */
function fetchRow($sql)
{
    // 执行qurery()函数
    if ($result = query($sql)) {
        // 从结果集取得一次数据即可
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        return $row;
    } else {
        return false;
    }
}

/*
 * 对数据进行安全处理
 */
function safeHandle($data)
{
    // 过滤字符串中的HTML特殊字符
    $data = htmlspecialchars($data);
    // 转义字符串中的SQL语句特殊字符
    $data = mysqli_real_escape_string($data);
    // 返回处理后的数据
    return $data;
}