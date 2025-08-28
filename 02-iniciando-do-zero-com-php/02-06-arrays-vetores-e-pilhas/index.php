<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.06 - Arrays, vetores e pilhas");

/**
 * [ arrays ] https://php.net/manual/pt_BR/language.types.array.php
 */
fullStackPHPClassSession("index array", __LINE__);

$arrA = array(1, 2, 3);

var_dump($arrA);

$arrayIndex = [
  "João",
    "Breno"
];

$arrayIndex[] = "Souza";
var_dump($arrayIndex);

/**
 * [ associative array ] "key" => "value"
 */
fullStackPHPClassSession("associative array", __LINE__);
$arrayAssoc = [
    "vocal" => "João",
    "base_guitar" => "Breno"
];

$arrayAssoc["base_bassar"] = "Souza";

var_dump($arrayAssoc);
/**
 * [ multidimensional array ] "key" => ["key" => "value"]
 */
fullStackPHPClassSession("multidimensional array", __LINE__);


/**
 * [ array access ] foreach(array as item) || foreach(array as key => value)
 */
fullStackPHPClassSession("array access", __LINE__);

echo "<p>O vocal é {$arrayAssoc['vocal']}</p>";

foreach ($arrayAssoc as $key => $value) {
    echo "<p>{$key}: {$value}</p>";
}