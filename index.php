<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo Staff</title>

    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- 以下两个插件用于在IE8以及以下版本浏览器支持HTML5元素和媒体查询，如果不需要用可以移除 -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link type="text/css" rel="stylesheet" href="./css/style.css"/> 
    </head>
    <body>

        <?php 
        ini_set("error_reporting","E_ALL & ~E_NOTICE");
        ?>


        <div class="container">
            <h1>Demo Staff</h1>
            <div class="form-left">
                <label for="keyword">Staff Number</label>
                <input type="text" class="form-control" id="keyword" placeholder="StaffNumber">
            </div>
            <button  class="btn btn-default" id="searchNumber">Search</button>
            <p id="searchResult"></p>
            <div class="form-left">
                <label for="StaffNumber1">Staff Number</label>
                <input type="text" class="form-control" id="StaffNumber" placeholder="StaffNumber" disabled>
            </div>
            <div class="form-left">
                <label for="StaffName1">Staff Name</label>
                <input type="text" class="form-control" id="StaffName" placeholder="StaffName">
            </div>
            <div class="form-left">
                <label for="StaffSex1">Staff Sex</label>
                <input type="text" class="form-control" id="StaffSex" placeholder="StaffSex">
            </div>
            <div class="form-left">
                <label for="StaffJob1">Staff Job</label>
                <input type="text" class="form-control" id="StaffJob" placeholder="StaffJob">
            </div>
            <button  class="btn btn-default" id="update">Update</button>
            <p id="updateResult"></p>
            </div>
        


<!-- 如果要使用Bootstrap的js插件，必须先调入jQuery -->
<script src="./js/jquery-2.2.0.min.js"></script>
<!-- 包括所有bootstrap的js插件或者可以根据需要使用的js插件调用　-->
<script src="./js/bootstrap.min.js"></script> 

<script src="./js/my.js"></script>


</body>

</html>