<?php
/**
 * Created by PhpStorm.
 * User: SHAWN
 * Date: 6/3/2017
 * Time: 11:30 AM
 */

// 获取文件后缀的函数，参数$path 表示文件名称
function getFileExt($path)
{
    // 获取文件后缀
    $ext = substr($path, strrpos($path, '.') + 1);
    // 返回文件后缀
    return $ext;
}

// 文件路径
$path = 'G:\SHAWN_IMG\1444357412017.jpg';
// 调用函数getFileExt()获取文件后缀
$ext = getFileExt($path);
// 输出获取的文件后缀
echo "<p> 文件路径：$path </p>";
echo "<p> 文件后缀：$ext </p>";