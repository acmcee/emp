<?php
header("Content_Type:application/json;charset=utf-8");
ini_set("error_reporting","E_ALL & ~E_NOTICE");
include './body/connmysql.php';
$number=$_GET["number"];
if (!isset($number) ||empty($number)) {
    $search_result = '{"success":"false","errormes":"parameter is wrong!"}';
    echo $search_result;
}
else {
    $sql="select * from `staff` where number='".$number."'";
    $result=mysqli_query($con,$sql);
    if (mysqli_num_rows($result)==0){
        $search_result = '{"success":"false","errormes":"未找到员工！"}';
        echo $search_result;
    }else {
        While($it=mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $search_result = '{
                "success": "true",
                "errormes":"找到员工啦",
                "number": "'.$it["number"].'",
                "name": "'.$it["name"].'",
                "sex": "'.$it["sex"].'",
                "job": "'.$it["job"].'"
            }';
            echo $search_result;
        }
    }
}
mysqli_close($con);
?>