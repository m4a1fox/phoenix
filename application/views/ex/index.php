<form action="?send" method="post">
    Name: <input type="text" name="name" /> 
    Age: <input type="text" name="age" />
    Gender: <select name="gender">
        <option value="m">male</option>
        <option value="f">female</option>
    </select>
    <input type="submit" />
</form>
<?php print_r($data[0])?>
