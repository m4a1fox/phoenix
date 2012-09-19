<div id="folio">
    <div class="one">
        <table border="0" width="100%">
            <?php
                foreach ($content as $value):
            ?>
            <tr>
                <td width="25%" style="padding: 10px;" valign="top">
                    <a href="<?php echo $value->link?>" target="_blank">
                        <img src="<?php echo $value->img_s?>" width="180" height="127" title="<?php echo $value->title?>" />
                    </a>
                </td>
                <td align="left" valign="top"  style="padding: 8px 10px;">
                    <dl id="folio-info">
                        <dt>Title:</dt>
                            <dd><?php echo $value->title?></dd>
                        <dt>Dev. time:</dt>
                            <dd><?php echo $value->dev_time?></dd>
                        <dt>Platform:</dt>
                            <dd><?php echo $value->platform?></dd>
                        <dt>Link:</dt>
                            <dd><a href="<?php echo $value->link?>"><?php echo $value->title?></a></dd>
                        <dt>Desc.:</dt>
                            <dd><?php echo $value->description?></dd>
                    </dl>
                    
<!--                    <a href="#" id="chat-bubble" title="./file/obgyn.mokamedianyc.com.png">LINK</a>
                    <div class="chat-bubble"></div>-->
                </td>
            </tr>
            <?php
                endforeach;
            ?>
        </table>
    </div>
</div>