<?php 

echo "
    <form method='post' action=''>
        <table>
            <tr>
                <td>Row</td>
                <td>
                    : <input type='number' name='row' size=20>
                </td>
            </tr>
            <tr>
                <td>Column</td>
                <td> 
                    : <input type='number' name='col' size=20>
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

$rows = $_POST['row'];
$cols = $_POST['col'];
$tmp = 1;
// $rows = 3;
// $cols = 5;

if ($_POST['submit']) {
    echo "</br> </br> </br>";
    echo "<table bgcolor='silver'>";
    for ($i = 1; $i <= $rows; $i++){
        echo "<tr height=35>";
        for ($j = 1; $j <= $cols; $j++) {
            if ($tmp % 2 == 0 ) {
                echo "<td width=35 bgcolor='white'> </td>";
            } else {
                echo "<td width=35 bgcolor='black'> </td>";
            }
            $tmp++;
        }
        echo "</tr>";
    }
    echo " </table>";
} else if ($_POST['reset']) {
    echo "<table> </table>";
} 
       
?>