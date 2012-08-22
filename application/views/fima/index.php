<div id="fima-page">


</div>
<table border="1">
    <tbody>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td align="left"><div id="fima-tree"></div></td>
            <td><div id="fima-folder-file"></div></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>

<?php
$dir = './application';
$rdir = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir), TRUE);
foreach ($rdir as $file){

    if($rdir->callHasChildren()){
         if(substr($file, -1) != '.' && substr($file, -1) != '..'){
           echo str_repeat('|_', $rdir->getDepth()).$file.'<br>';  
        }
    }else{

        if(substr($file, -1) != '.' && substr($file, -1) != '..'){
           echo '<li>'.str_repeat('&CenterDot;', $rdir->getDepth()).$file.'</li>';  
        }
          
    }
}



?>
