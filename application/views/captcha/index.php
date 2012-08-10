<?php
$file = './application/controllers/mail.php';
function highlight_num($file){
   echo '<num class="num">'. implode(range(1, count(file($file))) ,'<br />') .'</num>'; 
   highlight_file($file);
}
?>

<code id="code">
    <div id="transparent"></div>
    <?php highlight_num($file);?>
</code>