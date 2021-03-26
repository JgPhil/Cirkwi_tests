<?php
// Un tableau de moutons
$moutons = [['Danny', 75], ['Richard', 60]];
define('CHARS', "abcdefghijklmnpqrstuvwxyABCDEFGHIJKLMNOPQRSUTVWXYZ");

function sum(array $moutons): int
{
    return array_reduce(
        $moutons,
        function ($accum = 0, $item) {
            return $accum += $item[1];
        }
    );
}

function avg(array $moutons): int
{
    return sum($moutons) / count($moutons);
}

function randName()
{
    $randNameMouton = "";
    for ($k = 0; $k < rand(3, 15); $k++) {
        $randNameMouton .= CHARS[rand(0, (strlen(CHARS) - 1))];
    }
    return $randNameMouton;
}

function addMoutons(string $name = null, int $units): void
{
    global $moutons;
    if ($units <= 0) {
        throw new Exception("Le nombre de moutons doit être supérieur à 0 !");
    }
    $count = $units;
    while ($count > 0) {
        $moutonName = $name;
        if (!$name) {
            $moutonName = randName();
        }
        array_push($moutons, [$moutonName, rand(10, 200)]);
        $count--;
    }
}

addMoutons('Gérard', 120);
echo "Moyenne de la valeur de mes " . count($moutons) . " moutons : " . avg($moutons);
echo PHP_EOL;

addMoutons(null, 100);
echo "Moyenne de la valeur de mes " . count($moutons) . " moutons : " . avg($moutons);
echo PHP_EOL;
