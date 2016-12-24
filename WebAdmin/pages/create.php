<?php
session_start();
?>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#212121">
    <tr>
        <form name="form1" method="post" action="./inc/check_key.php">
            <td>
                <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#212121">
                    <tr>
                        <td colspan="3"><strong>Create Account </strong></td>
                    </tr>
                    <tr>
                        <td width="78">Username</td>
                        <td width="6">:</td>
                        <td width="294"><input name="userbox" type="text" id="user"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td><input name="passbox" type="text" id="pass"></td>
                    </tr>
                    <tr>
                        <td width="78">Key</td>
                        <td width="6">:</td>
                        <td width="294"><input name="keybox" type="text" id="key"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="Submit" value="Login"></td>
                    </tr>
                </table>
            </td>
        </form>
    </tr>
</table>