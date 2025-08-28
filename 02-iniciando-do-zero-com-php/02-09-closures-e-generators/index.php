<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
fullStackPHPClassSession("closures", __LINE__);
 // funções anônimas
$myAge = function($year) {
    $age = date("Y") - $year;
    return "<p>Você tem {$age} anos</p>";
};

echo $myAge(1900);

/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);

$iterator = 10;

function showDate($days) {
    $saveDate = [];
    for($day = 1; $day <= $days; $day++) {
        $saveDate[] = date("d/m/Y", strtotime("+{$days} days"));
    }
    return $saveDate;
}

echo "<div style='text-align: center'>";
foreach (showDate(1) as $date) {
    echo "<smal class='tag'>{$date}</small>".PHP_EOL;
}
echo "</div>";

function generatorDate($days)
{
    for($day = 1; $day <= $days; $day++) {
        yield date("d/m/Y", strtotime("+{$days} days"));
    }
}


echo "<div style='text-align: center'>";
foreach (generatorDate(1) as $date) {
    echo "<smal class='tag'>{$date}</small>".PHP_EOL;
}
echo "</div>";