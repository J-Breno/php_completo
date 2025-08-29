<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.04 - Manipulação de objetos");

/*
 * [ manipulação ] http://php.net/manual/pt_BR/language.types.object.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$arrProfile = [
  "name" => "John Doe",
  "email" => "john@doe.com",
  "age" => 25,
];
$obj = (object)$arrProfile;

echo "<p>{$obj->name}</p>}";
$ceo = $obj;
unset($ceo->age);
var_dump($ceo);

/**
 * [ análise ] class | objetcs | instances
 */
fullStackPHPClassSession("análise", __LINE__);

var_dump([
    "class" => get_class($obj),
    "methods" => get_class_methods($obj),
]);