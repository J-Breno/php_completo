<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.02 - Funções para strings");

/*
 * [ strings e multibyte ] https://php.net/manual/en/ref.mbstring.php
 */
fullStackPHPClassSession("strings e multibyte", __LINE__);
$string = "O último show do AD/DC  foi incrivel";

var_dump([
    "string" => $string,
    'strlen' => strlen($string),
    'mb_strlen' => mb_strlen($string),
    'substr' => substr($string, '14'),
    'mb_substr' => mb_substr($string, '14'),
    'strtoupper' => strtoupper($string),
    'mb_strtoupper' => mb_strtoupper($string),
]);

/**
 * [ conversão de caixa ] https://php.net/manual/en/function.mb-convert-case.php
 */
fullStackPHPClassSession("conversão de caixa", __LINE__);

$mbString  = $string;
var_dump([
    'mb_strtoupper' => mb_strtoupper($mbString),
    'mb_strtolower' => mb_strtolower($mbString),
    'mb_convert_case UPPER' => mb_convert_case($mbString, MB_CASE_UPPER),
    'mb_convert_case LOWER' => mb_convert_case($mbString, MB_CASE_LOWER),
]);
/**
 * [ substituição ] multibyte and replace
 */
fullStackPHPClassSession("substituição", __LINE__);

$mbReplace = $mbString." Fui, iria novamente";
var_dump([
   "mb_strlen" => mb_strlen($mbReplace),
    "mb_strpos" => mb_strpos($mbReplace, ", "),
    "mb_strrpos" => mb_strrpos($mbReplace, ", "),
]);

/**
 * [ parse string ] parse_str | mb_parse_str
 */
fullStackPHPClassSession("parse string", __LINE__);

