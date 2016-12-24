<?php
?>
<center>
    <h2>User Control</h2>
    <form name="controlform" method="post" action="./pages/subs/acp_info.php">
        <BR /><label>Username</label><BR />
        <input name="userbox" type="text" id="user"><BR /><BR />
        <select name="useroption">
            <option value="Ban">Ban</option>
            <option value="Unban">Unban</option>
            <option value="Lock">Lock</option>
            <option value="Unlock">Unlock</option>
            <option value="Delete">Delete</option>
        </select>
        <input type="submit" value="Submit">
    </form>
</center>