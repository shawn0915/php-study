<?php
/**
 * Created by PhpStorm.
 * User: SHAWN
 * Date: 6/3/2017
 * Time: 1:10 PM
 */

header('Content-type:text/html;charset=utf-8');

require './public_function.php';
dbInit();
$link = new mysqli($host = 'localhost', $user = 'root', $password = '123456', $database = 'php_dev', $port = '3307');

/*
 * 生成order子句
 */
// 把合法的字段存入数组
$fields = array('e_id', 'e_dept', 'date_of_entry');
// 初始化排序语句
$sql_order = '';
// 判断$_GET['order']是否存在
$order = isset($_GET['order']) ? $_GET['order'] : '';
$sort = isset($_GET['sort']) ? $_GET['sort'] : '';
if (in_array($order, $fields)) {
    if ($sort == 'desc') {
        $sql_order = "order by $order desc";
        $sort = 'asc';
    } else {
        $sql_order = "order by $order asc";
        $sort = 'desc';
    }
}

/*
 * 生成where子句
 */
$sql_where = '';
if (isset($_GET['keyword'])) {
    // 赋值
    $keyword = $_GET['keyword'];
    // 转义
    $keyword = mysqli_real_escape_string($query = "$keyword");
    // 拼接
    $sql_where = "where e_name like '%$keyword%'";
}

/*
 * 分页
 */
// 保存当前用户的页码
$page = 1; // 假设当前用户访问的页码是1
$page_size = 2;// 每页最大数据条数

// 查询所有记录的行数
$res = mysqli_query($link, 'SELECT * FROM emp_info');
//$res = mysqli_query($link, 'SELECT count(1) FROM emp_info');
//var_dump($res);
//$count = mysqli_fetch_row($res);
$count = mysqli_num_rows($res);
// 取出查询结果的第一列值
//$count = $count[0];
//$count=10;

// 计算最大页码值
$max_page = ceil($count / $page_size);
//var_dump($count);
//var_dump($max_page);
// 获取当前访问的页码，并做容错处理
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$page = $page > $max_page ? $max_page : $page;
$page = $page < 1 ? 1 : $page;

// 组合分页链接
$page_html = "<a href='./showList.php?page=1'>首页</a>&nbsp;";
$page_html .= "<a href='./showList.php?page=" . (($page - 1) > 0 ? ($page - 1) : 1) . "')>上一页</a>&nbsp;";
$page_html .= "<a href='./showList.php?page=" . (($page + 1) < $max_page ? ($page + 1) : $max_page) . "')>下一页</a>&nbsp;";
$page_html .= "<a href='./showList.php?page={$max_page}'>尾页</a>";
// 拼接查询语句
$lim = ($page - 1) * $page_size;
$sql_limit = "limit $lim,$page_size";


// 准备SQL语句
//$sql = 'SELECT * FROM emp_info';
$sql = "SELECT * FROM emp_info $sql_where $sql_order $sql_limit";
//// 执行SQL
//$result = mysqli_query($link, $sql);
////var_dump($result);

//// 定义员工数组，用以保存员工信息
//$emp_info = array();
//// 遍历结果集，获取每位员工的详细数据
//while ($row = mysqli_fetch_assoc($result)) {
//    $emp_info[] = $row;
//}
$emp_info = fetchALL($sql);


// 设置常量，用以判断视图文件是否由此文件加载
define('APP', 'shawn');
// 加载HTML模板文件，显示数据
require './list_html.php';
