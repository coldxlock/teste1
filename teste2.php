<?php 
// 2 -Função Primos($inicial,$final)
// Crie uma função que receba como parâmetro 2 números  inteiros (inicial e final)  e retorne um array com os números primos estão compreendidos entre o valor inicial e o final, 
// desprezando o número inicial e final recebidos como parâmetro. 

// Exemplo para teste:

// Numero Inicial = 10
// Número Final = 29
// Resposta: Encontrados 5 números primos, são eles: 11,13,17,19,23 

$inicial = 0;
$final = 101;

primos($inicial, $final);

function primos($inicial, $final) 
{
    //percorrendo o interval do inicial e final, sem considerar os mesmos
    for ($i=$inicial+1; $i < $final ; $i++) {    
        //loop para realizar verificar se é primo, se o numero for divido apenas por ele mesmo e por 1, entao é primo
        $qtd_divisoes = 0;
        for ($cont=1; $cont <= $i; $cont++) 
        { 
            if (($i % $cont) == 0) 
            {
                $qtd_divisoes++;
            }
        }
        if ($qtd_divisoes == 2) 
        {
            $primos[] = $i;
        }
    }
    echo '<pre>';
    print_r($primos);
    echo '</pre>';
}
?>
