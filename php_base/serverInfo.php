<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Server Info</title>
</head>
<body>
<table border="1">
    <tr>
        <th colspan="2">服务器信息展示</th>
    </tr>
    <tr>
        <td>当前PHP版本号：</td>
        <td><?php echo PHP_VERSION; ?></td>
    </tr>
    <tr>
        <td>操作系统的类型：</td>
        <td><?php echo PHP_OS; ?></td>
    </tr>
    <tr>
        <td>当前服务器时间：</td>
        <td><?php echo date('Y-m-d H:i:s'); ?></td>
    </tr>
    <tr>
        <td>UNIX时间戳</td>
        <td><?php echo time(); ?></td>
        <td><?php echo date('Y-m-d H:i:s',time()); ?></td>
    </tr>
    <tr>
        <td>错误级别 E_ERROR</td>
        <td><?php echo E_ERROR; ?></td>
    </tr>
    <tr>
        <td>错误级别 E_WARNING</td>
        <td><?php echo E_WARNING; ?></td>
    </tr>
    <tr>
        <td>错误级别 E_PARSE</td>
        <td><?php echo E_PARSE; ?></td>
    </tr>
    <tr>
        <td>错误级别 E_NOTICE</td>
        <td><?php echo E_NOTICE; ?></td>
    </tr>
</table>
</body>
</html>