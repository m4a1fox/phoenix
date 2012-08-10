<!DOCTYPE html>
<html lang="en">
<head>
<title>Error <?php echo $expClass->getCode(); ?></title>
<style type="text/css">

::selection{ background-color: #E13300; color: white; }
::moz-selection{ background-color: #E13300; color: white; }
::webkit-selection{ background-color: #E13300; color: white; }

body {
	background-color: #979797;
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
</style>
</head>
<body>
<div  id="error_head">
    <span style="padding-top: 3px; font-size: large;">&#9658;</span> 
        Error correspondent in your SYSTEM. Check information to correct it. 
</div>
    <div id="container">
        <h1>Error code: <?php echo $expClass->getCode(); ?></h1>
        <p><strong>Error message:</strong> <?php echo $expClass->getMessage(); ?></p>
		<p><strong>Error line:</strong> <?php echo $expClass->getLine(); ?></p>
		<p><strong>Error information:</strong> <?php echo $myMessage; ?></p>
		<p><strong>Error file:</strong> <?php echo $expClass->getFile(); ?></p>
    </div>
</body>
</html>