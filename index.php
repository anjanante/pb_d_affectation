<?php

function executeOptimisation(array $a_matrice)
{
    $a_base = [];
    $a_colBase = [];
    $n_tache = $a_matrice[0] ?? 0;
    $n_allRow = count($a_matrice);
    for ($i = 0; $i < $n_allRow;$i++) {
        //if not an array
        if(!is_array($a_matrice[$i]) ){ echo 'Tableau ihany'; break;}
        //if not an array n*n
        $n_allCol = count($a_matrice[$i]);
        if($n_allRow != $n_allCol){ echo 'Tableau à n*n ihany'; break;}
        $a_acteurs = $a_matrice[$i];
        $n_min = min($a_acteurs);
        $n_col = array_search($n_min,$a_acteurs);
        $a_base[$i][$n_col] = $n_min;
        //get col with base
        array_push($a_colBase,$n_col);
    }

    print_r($a_base);
    if(count(array_unique($a_colBase)) != $n_allRow) 
        echo 'recherche en cours...';
    else
        echo 'La solution a été trouvée';

    print_r($a_colBase);
    $a_occurenceColBase = array_count_values($a_colBase);
    $n_colMaxBase = array_search(max($a_occurenceColBase), $a_occurenceColBase);
    print_r($n_colMaxBase);

}

// executeOptimisation([
//     [1,2,3],
//     [2,1,3],
//     [2,3,1],
// ]);


executeOptimisation([
    [10,5,9,18,11],
    [13,19,6,12,14],
    [3,2,4,4,5],
    [18,9,12,17,15],
    [11,6,14,19,10],
]);