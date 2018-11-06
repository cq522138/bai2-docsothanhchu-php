<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post">
    <input type="number" name="so">
    <input type="submit" value="doi sang chu">
</form>
<?php
$number = 9;
$so_hang_tram = floor($number/100);
$so_hang_chuc = floor(($number%100)/10);
$so_hang_dv = floor(($number%100)%10);
$doc_so = [1 => 'one', 2 => 'two', 3 => 'three', 4 => 'four',5 => 'five', 6 => 'six',7 => 'seven', 8 => 'eight', 9 => 'nine'];
$doc_so_chuc = [1 => 'ten', 2 => 'twenty', 3 => 'thirty', 4 => 'fourty',5 => 'fifty', 6 => 'sixty',7 => 'seventy', 8 => 'eighty', 9 => 'ninety'];
$doc_so_10 = [1 => 'eleven', 2 => 'twelve', 3 => 'thirteen', 4 => 'fourteen', 5 => 'fifteen'];
$result = '';
$result = $doc_so[$so_hang_tram] . ' hundred and';
// 11, 12, .. 19
// 10, 20 <
if ($so_hang_chuc > 1){
    $result .= ' ' . $doc_so_chuc[$so_hang_chuc];
} else {
    if ($so_hang_dv == 0) {
        $result .= ' ten';
    } else {
        $result .= ' ' . $doc_so_10[$so_hang_dv];
    }
}
$result .= ' ' . $doc_so[$so_hang_dv];
echo $result;
?>
</body>
</html>