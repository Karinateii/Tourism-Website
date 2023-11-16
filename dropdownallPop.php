<?php
include "db_connect.php";
mysqli_select_db($conn, "tourgroupdb");

$sql = "SELECT ID, Sites FROM State_Sites ORDER BY Sites";
$result = mysqli_query($conn, $sql);

$output = "";

foreach($result as $row)
{
    $output .= '<label id="bgcheck">';
    $output .= '<input type="checkbox" id="places" name="places[]" value="'.$row['ID'].'">';
    $output .=  $row['Sites'];
    $output .= '</label><br>';
}    
echo $output;

?>