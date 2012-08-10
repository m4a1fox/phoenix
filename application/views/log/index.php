<h1>LOG IN</h1>
<form action="" method="post">
    <lable>Login</lable>
    <input type="text" name="login" value="" />
    <lable>Password</lable>
    <input type="text" name="password" value="" />
    <input type="submit" value="Log In" name="send">
</form>
<?php
dbg::showPrint($post);
?>