<?php
 
echo "
    <center> Login Form </center></br> 
    <form action='cekLogin.php' method='POST'>
    <table border='0' align='center'>
        <tr>
            <td>Username</td>
            <td><input type='text' name='username'></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type='password' name='pw'></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type='submit' name='submit' value='Login'>
                <input type='reset' name='reset' value='Cancel'>
            </td>
        </tr>
    </table>
    </form>
";

?>