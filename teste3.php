<?php 
// 3 - Escreva um programa
// Escreva um programa que preencha um array com 20 números inteiros sorteados entre 1 e 10. Depois informe qual ou quais número(s) não se repetiram.

// Exemplo

// Array sorteado = [2,5,8,2,8,5,3,9,6,3,4,6,3,1,2,1,2,3,7,1]
// Os números que não se repetem são o 4 e 7. 

for ($i=1; $i <= 20; $i++) { 
    $array_sorteado[] = rand(1,10);
}
//exibe o array
echo '<pre>';
print_r($array_sorteado);
echo '</pre>';

$arr = $array_sorteado;

$unique = array_unique($arr); //pego os números únicos
$dupes = array_diff_key( $arr, $unique );  //pegos os duplicados
//loop verificando qual valor nao contem na lista dos duplicados
foreach ($unique as $key => $value) {
    if (!in_array($value,$dupes)) {
        $not_dupes[] = $value;
    }
}

//exibindo quais n sao duplicados
// echo '<pre>';
// print_r($not_dupes);
// echo '</pre>';

echo "O(s) número(s) ".implode(",",$not_dupes). " não repetem";

?>