<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.12 - Constantes e constantes mágicas");

/*
 * [ constantes ] https://php.net/manual/pt_BR/language.constants.php
 */
fullStackPHPClassSession("constantes", __LINE__);
define("COURSE", "Full stack php");
const AUTHOR = "Breno";

$formation = true;

if($formation){
    define("COURSE_TYPE", "Formação");
} else {
    define("COURSE_TYPE", "Curso");

}

echo "<p>COUSE COURSE_TYPE AUTHOR</p>";
echo "<p>", COURSE_TYPE," " , COURSE, " de ", AUTHOR, "</p>";
echo "<p>".COURSE_TYPE." ".COURSE." de ".AUTHOR."</p>";

class Config
{
    const USER = "Breno";

}
echo "<p>".Config::USER."</p>";
/*
 * [ constantes mágicas ] https://php.net/manual/pt_BR/language.constants.predefined.php
 */
fullStackPHPClassSession("constantes mágicas", __LINE__);

var_dump([
    __DIR__,
    __FILE__,
    __LINE__,
]);