<?php 
// 4 - Função SequenciaCrescente($array)
// Receba como parametro um array de números inteiros e responda TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

// Exemplos para teste 

// Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
//          -  Sequencias com apenas um elemento são consideradas como TRUE

// [1, 3, 2, 1]  false
// [1, 3, 2]  true
// [1, 2, 1, 2]  false
// [3, 6, 5, 8, 10, 20, 15] false
// [1, 1, 2, 3, 4, 4] false
// [1, 4, 10, 4, 2] false
// [10, 1, 2, 3, 4, 5] true
// [1, 1, 1, 2, 3] false
// [0, -2, 5, 6] true
// [1, 2, 3, 4, 5, 3, 5, 6] false
// [40, 50, 60, 10, 20, 30] false
// [1, 1] true
// [1, 2, 5, 3, 5] true
// [1, 2, 5, 5, 5] false
// [10, 1, 2, 3, 4, 5, 6, 1] false
// [1, 2, 3, 4, 3, 6] true
// [1, 2, 3, 4, 99, 5, 6] true
// [123, -17, -5, 1, 2, 3, 12, 43, 45] true
// [3, 5, 67, 98, 3] true

$array_original = [123, -17, -5, 1, 2, 3, 12, 43, 45];

sequenciaCrescente($array_original);

function sequenciaCrescente($array_original)
{
    //Explicando um pouco o código:
    //Pego o array original passado, removo o primeiro a posicao 0 do mesmo, e armazeno ele em outra variavel ordenando o mesmo, 
    //caso o array sem o item seja igual ao ordenado, entao retornará true
    //depois faço isso com a posicao 1,posicao 2 etc ... do array e assim por diante     
    // OBS: nao comentei linha por linha pra ganhar tempo no teste          
    $rst = new stdClass;
    foreach ($array_original as $key => $valor) {
        $aux_original = $array_original;
        unset($aux_original[$key]);     
        $aux_original_ordenado =  $aux_original  ;
        sort($aux_original_ordenado);    
        $aux_original_ordenado = array_unique($aux_original_ordenado);
        $aux_original_ordenado = implode(',', $aux_original_ordenado );
        $aux_original = implode(',', $aux_original );
        if ($aux_original_ordenado == $aux_original) {
            echo "true";
            return;                  
        }
    }
    echo "false";    
}



?>