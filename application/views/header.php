<?php $currentUrl = M4A1_HOST . trim($_SERVER['REQUEST_URI'], '/');?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo M4A1_HOST;?>public/css/style.css" />
    <title></title>
    <script type="text/javascript" src="<?php echo M4A1_HOST;?>public/js/jQuery.js"></script>

    <script>
         var currentUrl = '<?php echo $currentUrl; ?>';
    </script>
    <script type="text/javascript" src="<?php echo M4A1_HOST;?>public/js/init.js"></script>
    <?php

    if(isset($this->js)){
        foreach($this->js as $js){
            echo '<script type="text/javascript" src="'.M4A1_HOST.'application/'.$js.'"></script>';
        }
    }
    ?>

</head>
<body>
<div style="height: 7px; background: black; border-bottom: 1px solid #737476; "></div>

<div style="height: 40px; width: 1100px;">
    <div id="search" >
        <form action="" method="post" id="search-form">
                <input type="text" placeholder="Search" name="s" />
                <input type="reset" name="search" id="searchBtn" value="X" />
                <input type="submit" name="search" id="searchBtn" value="" />
            </form>
            
        </div>
</div>

<div id="content">

<div id="info">
    <div id="transparent"></div>
    <div id="info_content">
        <li><a href="<?php echo M4A1_HOST;?>captcha">Captcha</a></li>
        <li><a href="<?php echo M4A1_HOST;?>download">Download</a></li>
    </div>
</div>
    <h1 id="logo"><img src="<?php echo M4A1_HOST;?>public/img/leavse.png"></h1>
    <div id="menu">
        <a href="<?php echo M4A1_HOST;?>">Home</a>
        <a href="<?php echo M4A1_HOST;?>about">About</a>
        <a href="<?php echo M4A1_HOST;?>mail">Mail</a>
        <a href="<?php echo M4A1_HOST;?>ex">EX</a>   
        <?php if(!isset($_SESSION['login'])):?>
            <a href="<?php echo M4A1_HOST;?>log/in">log In</a>
        <?php else:?>
            <a href="<?php echo M4A1_HOST;?>log/out">log Out</a>
        <?php endif;?>
    </div>
    <?php dbg::showPrint($_SESSION);?>