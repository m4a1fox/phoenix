<?php $currentUrl = M4A1_HOST . trim($_SERVER['REQUEST_URI'], '/');?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo M4A1_HOST;?>public/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo M4A1_HOST; ?>usefull/jqueryFileTree/jqueryFileTree.css" />
    <title>
    <?php
        
        echo $title;
        
    ?>
    </title>
    <script type="text/javascript" src="<?php echo M4A1_HOST;?>public/js/jQuery.js"></script>
    <script type="text/javascript" src="<?php echo M4A1_HOST;?>usefull/jqueryFileTree/jqueryFileTree.js"></script>
    <script src="/usefull/fckeditor/fckeditor.js" type="text/javascript"></script>
    <script src="<?php echo M4A1_HOST;?>usefull/fima/fima.js"></script>

    <script>
         var URL = '<?php echo M4A1_HOST; ?>';
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
<div style="height: 7px; background: black; border-bottom: 1px solid #737476; z-index: 99;"></div>

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
        <ul>
        <li>structure</li>
        <?php
            $link = new shortlink();
            $link = $link->allLink();
        ?>
        <?php foreach ($link as $value):?>
            <li>
                <a href="<?php echo M4A1_HOST;?>content/show/<?php echo $value->link;?>">
                    <?php echo $value->title?>
                </a>
            </li>
        <?php endforeach;?>
        </ul>
    </div>
</div>
    <h1 id="logo"><a href="/"><img src="<?php echo M4A1_HOST;?>public/img/leavse.png"></a></h1>
    <div id="menu">
        <a href="<?php echo M4A1_HOST;?>">Home</a>
        <a href="<?php echo M4A1_HOST;?>about">About</a>
        <a href="<?php echo M4A1_HOST;?>mail">Mail</a>
        <a href="<?php echo M4A1_HOST;?>ex">EX</a>
        <a href="<?php echo M4A1_HOST;?>folio">folio</a>
        <?php if(!Session::get('login')):?>
            <a href="<?php echo M4A1_HOST;?>log/in">log In</a>
        <?php else:?>
            <a href="<?php echo M4A1_HOST;?>log/out">log Out</a>
        <?php endif;?>
    </div>