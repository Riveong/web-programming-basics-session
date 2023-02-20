<?php
session_start();

?>

<!DOCTYPE html>
<html>
    <body>
        <h1> Login </h1>
        <table>
            <form method="POST" action="session2.php">
                <tr>
                <td>Username : </td>
                <td><input type="text" name ="user" id="user"></td>
                </tr>

                <tr>
                <td>Password : </td>
                <td><input type="text" name ="pass" id="pass"></td>
                
                </tr>
                <tr>
                    <td><input type="submit"></td></tr>
            </form>
        </table>
    </body>
</html>