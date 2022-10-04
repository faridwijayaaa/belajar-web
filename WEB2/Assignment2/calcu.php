<?php

echo "
    <form action='' method='POST'>
        <table>
                <tr> 
                    <td colspan='2'> Calculator Sederhana </td> 
                </tr>
                <tr>
                    <td> Index ke 1 </td>
                    <td>
                        : <input type='text' name='index1' size=20>
                    </td>
                </tr>
                <tr>
                    <td> Index ke 2 </td>
                    <td> 
                        : <input type='text' name='index2' size=20>
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td>
                        <input type='submit' name='tambah' value='Tambah' style='margin-left: 10px'>
                        <input type='submit' name='kurang' value='Kurang'>
                        <input type='submit' name='kali' value='Perkalian'>
                        <input type='submit' name='bagi' value='Bagi'>
                        <input type='submit' name='reset' value='Reset'>
                    </td>
                </tr>
        <table>
        
    </form>
";

$i = $_POST['index1'];
$k = $_POST['index2'];
$hasil = 0;

if ($_POST['tambah']) {
    $hasil = $i + $k;
} else if ($_POST['kurang']) {
    $hasil = $i - $k;
} else if ($_POST['kali']) {
    $hasil = $i * $k;
} else if ($_POST['bagi']) {
    $hasil = $i / $k;
} else if ($_POST['reeset']) {
    $hasil = 0;
}

echo "  ";
echo "Hasil : $hasil";

?>