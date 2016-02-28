<?php
header("Content_Type:application/json;charset=utf-8");
ini_set("error_reporting","E_ALL & ~E_NOTICE");
include './body/connmysql.php';
$number=$_POST["number"];
$name=$_POST["name"];
$sex=$_POST["sex"];
$job=$_POST["job"];
if (!isset($number) ||empty($number)) {
    $search_result = '{"success":"false","errormes":"parameter is wrong!"}';
    echo $search_result;
}
else {
    $sql="select * from `staff` where number='".$number."'";
    //echo $sex;
    $update_sql="update `staff` set name='".$name."',sex='".$sex."',job='".$job. "' where number='".$number."'";
    //echo $update_sql;
    $result=mysqli_query($con,$update_sql);
    if (!$result){
        $search_result = '{"success":"false","errormes":"update failed!'.mysqli_error().'"}';
        echo $search_result;
    }else {
            $search_result = '{
                "success": "true",
                "errormes":"update successfully!"
            }';
            echo $search_result;
        }
}
mysqli_close($con);
?>