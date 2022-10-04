<?php

echo "
    <form method='get' action=''>
        <table>
            <tr>
                <td>Username</td>
                <td>
                    : <input type='text' name='user' placeholder='Username' size=20>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td> 
                    : <input type='password' name='pass' placeholder='********' size=20>
                </td>
            </tr>
            <tr>
                <td> </td>
                <td>  
                    <input type='submit' name='submit' value='Submit' style='margin-left: 10px'>
                    <input type='reset' name='reset' value='Reset'> 
                </td>
            </tr>
        <table>
    </form>
";

?>