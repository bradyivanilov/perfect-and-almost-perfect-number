<?php

$inputNums = [];
$inputLen = 0;

// INPUT Q
$input = readline("Berapa Jumlah Angka Yang Ingin Kamu Cek? ");
if (is_numeric($input)) {
    $parseNum = (int)$input;
    $inputLen = $parseNum;
} else {
    echo "Masukkan Angka Saja! \n";
    return;
}

// N_1 ... N_Q
$xInput = 1;
while ($xInput <= $inputLen) {
    $input = readline("Masukkan Angka Yang Ingin Kamu Cek! ");
    if (is_numeric($input)) {
        $parseNum = (int)$input;
        array_push($inputNums, $parseNum);
    } else {
        echo "Masukkan Angka Saja! \n";
        continue;
    }
    $xInput++;
}

function findFactor($n)
{
    $sum = 0;
    for ($i = 1; $i < $n; $i++) {
        if ($n % $i == 0) {
            $sum += $i;
        }
    }
    if ($sum == $n) {
        echo "perfect\n";
    } else if ($sum == ($n-1)){
        echo "hampir\n";
    } else {
        echo "bukan\n";
    }
}

for ($x=0; $x < count($inputNums); $x++) {
    $n = $inputNums[$x];
    findFactor($n);
}

?>
