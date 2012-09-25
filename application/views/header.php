<?php $currentUrl = M4A1_HOST . trim($_SERVER['REQUEST_URI'], '/');?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php echo META::TITLE();?></title>
    <meta name="description" content="<?php echo META::KEYWORD();?>" />
    <meta name="keywords" content="<?php echo META::DESCRIPTION();?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo M4A1_HOST; ?>public/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo M4A1_HOST; ?>usefull/jqueryFileTree/jqueryFileTree.css" />    <script type="text/javascript" src="<?php echo M4A1_HOST;?>public/js/jQuery.js"></script>
    <script type="text/javascript" src="<?php echo M4A1_HOST;?>usefull/jqueryFileTree/jqueryFileTree.js"></script>
    <script src="/usefull/fckeditor/fckeditor.js" type="text/javascript"></script>
    <script src="<?php echo M4A1_HOST;?>usefull/fima/fima.js"></script>

    <script>
         var URL = '<?php echo M4A1_HOST; ?>';
         var currentUrl = '<?php echo $currentUrl; ?>';
    </script>
    <script type="text/javascript" src="<?php echo M4A1_HOST;?>public/js/init.js"></script>
    <?php
        MOUNT::JS();
    ?>
</head>
<body>
<div class="top-str"></div>

<div id="search" >
    <form action="<?php echo M4A1_HOST;?>search" method="post" id="search-form">
        <input type="text" placeholder="Search" name="search" />
        <input type="reset" name="search" id="searchBtn" value="X" />
        <input type="submit" name="send" id="searchBtn" value="" />
    </form>        
</div>

<div id="content">
<div id="info">
    <div id="transparent"></div>
    <div id="info_content">
        <ul>
        <li>structure</li>
        <?php
            $link = shortlink::allLink();
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