<?php

echo "LAÇO FOR<br>";
for ($i=0; $i <= 10; $i++) { 
    echo $i."<br>";
    
}

echo "LAÇO WHILE <br>";
$i =0;
while ($i <= 10) {
    echo $i."<br>";
    $i++;
}

$i = 0;
echo "LAÇO DO WHILE<br>";
do {
    echo $i."<br>";
    $i++;
} while ($i <= 10);

$i=0;
echo "LAÇO IF<br>";
if ($i<10) {
    echo "Valor da variável I é " .$i."e passou no IF";
} else if ($i == 10) {
    echo "Valor da variável I é ".$i."e passou no ELSE IF";
} else {
    echo "Valor da variável I é ".$i."e passou no ELSE";
}

?>

