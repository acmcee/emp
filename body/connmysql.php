<?php
	$config=include './body/config.php';
	$con = mysqli_connect( $config['host'],$config['username'],$config['password'],$config['dbname']);
	
		//这句就是获取page中的值，假如不存在page，那么页数就是1。
		$num=30;         //每页显示30条数据
		if (!$con)
		{
			die('Could not connect to database: ' . mysql_error());
		}

		
		if (!mysqli_query($con,'SET NAMES UTF8')){echo "<div class =\"smile\"> <div class=\"bigsmile\">:( </div> DON'T SUPPORT CHINESE! </div>.<br />";exit;} 
?>