<html>
<head>
    <meta charset="UTF-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
    <title>xxx</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css" />
    <style type="text/css">
        body {
            background: #ffffff url() top center no-repeat !important;
            background-size:100% auto !important;
        }
    </style>

</head>
<body>

<?php
include_once './sql.php';
$user=$_GET["user"];
$n=$_GET["n"];

if($n>=0 && $n<=100)
{
    $sql = "select fenshu from score where id = '$user'";
    $result=_select_data($sql);
    $m=mysql_fetch_array($result);
    $q = $m['fenshu'];

    if($q!=0 && $q!=100)
    {
        $sql = "UPDATE `score` SET `fenshu`= '$n' where id = '$user'";
        _update_data($sql);
    }
}

?>
<img src = "xxx" width="100%" >
</body>
</html>