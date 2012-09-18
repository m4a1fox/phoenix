</div>
<?php if(Session::get('login')):?>
<div id="footer">
    <div id="transparent"></div>
    <label id="link">
    <a href="<?php echo M4A1_HOST;?>admin">admin</a>
    <a href="<?php echo M4A1_HOST;?>fima">fima**</a>
    <a href="<?php echo M4A1_HOST;?>ladmin">ladmin</a>
    <a href="<?php echo M4A1_HOST;?>fadmin">fadmin</a>
    <a href="<?php echo M4A1_HOST;?>dadmin">dadmin</a>
    <a href="<?php echo M4A1_HOST;?>cadmin">cadmin</a>
    <a href="<?php echo M4A1_HOST;?>editor">editor</a>
        <span style="position: absolute; right: 10px;">** - proj. freez</span>
    </label>
</div>
<?php endif;?>
</body>
</html>