<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.03 - Funções para arrays");

/*
 * [ criação ] https://php.net/manual/pt_BR/ref.array.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$index = [
  'AC/DC',
    "Nirvana",
    "Alter Bridge"
];

$assoc = [
    "band_1" => 'AC/DC',
    "band_2" => 'Nirvana',
    "band_3" => 'Alter Bridge',
];

array_unshift($index,  "", "Peral Jam");
array_push($index, "");

array_shift($index);
array_pop($index);

$index = array_filter($index);
/*
 * [ ordenação ] reverse | asort | ksort | sort
 */
fullStackPHPClassSession("ordenação", __LINE__);

$index = array_reverse($index);

asort($index);
ksort($index);
krsort($index);
sort($index);
rsort($index);

/*
 * [ verificação ]  keys | values | in | explode
 */
fullStackPHPClassSession("verificação", __LINE__);

var_dump([
    array_keys($assoc),
    array_values($assoc),
]);

if(in_array("AC/DC", $assoc)){
    echo "<p>cadssssss</p>";
}



/**
 * [ exemplo prático ] um template view | implode
 */
fullStackPHPClassSession("exemplo prático", __LINE__);


