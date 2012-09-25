<?php
$i=0;
require './system/config/database.php';
    if(isset($_POST['create'])){        
        $dbname = $db['default']['dbname'];
        $db = mysql_connect($db['default']['hostname'], $db['default']['username'], $db['default']['password']);
        $db = mysql_query("CREATE DATABASE `$dbname`");
        header("Location: ./");
    }
?>

<!DOCTYPE html>
<html>
<head>
<title>Error <?php echo $expClass->getCode();?></title>
<style type="text/css">

::selection{ background-color: #E13300; color: white; }
::moz-selection{ background-color: #E13300; color: white; }
::webkit-selection{ background-color: #E13300; color: white; }

body {
/*	background-color: #c3afaf;*/
        background-image: url('./public/img/bg.png');
	margin: 0px 20px;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 19px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#container {
	margin: 10px;
	border: 1px solid #D0D0D0;
	-webkit-box-shadow: 0 0 8px #D0D0D0;
}

#error_head{
    border: 10px solid white; 
    padding: 20px; 
    background: maroon; 
    color: white; 
    font-size: large;
    margin: 10px;
}

p {
	margin: 12px 15px 12px 15px;
}

#error{
	background: #df3232; 
	color: white;
	padding: 2px;
}
</style>
</head>
<body>

<div  id="error_head">
    <span style="padding-top: 3px; font-size: large;">&#9658;</span> 
        Error correspondent in your SYSTEM. Check information to correct it.
</div>

	<div id="container">
            <h1>Error code: <?php echo $expClass->getCode(); ?>
                <?php
                    if($expClass->getCode() == 1049):
                ?>
                <span style="font-size: 12px; right: 50px; position: fixed;">
                    <form action="" method="POST">
                        <input type="submit" name="create" value="create database: <?php echo $db['default']['dbname'];?>" />
                    </form>
                </span>
                <?php endif;?>
            </h1> 
		<p><strong>Error message:</strong> <?php echo $expClass->getMessage(); ?></p>
		<p><strong>Error line:</strong> <?php echo $expClass->getLine(); ?></p>
		<p><strong>Error information:</strong> <?php echo $myMessage; ?></p>
		<p><strong>The exception was thrown in file:</strong> <?php echo $expClass->getFile(); ?></p>
                <?php foreach ($expClass->getTrace() as $value) {
                    
                    echo !isset($value['file']) ? '' : '<p><strong>Error #'.++$i.' in file: </strong>'.$value['file']. '('.$value['line'].')</p>';
                }?>
	</div>
</body>
</html>