<?php 
declare(strict_types=1);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php

function addition($a, $b) {
    return $a + $b;
}
echo addition(4, 6)."<br>";

function division(int $a, int $b) {
    if ($b === 0) {
        throw new Exception("Division par zéro interdite");
    }
    return $a / $b;
}

try {
    echo division(10, 0)."<br>";
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage()."<br>";
}

require __DIR__ . '/../src/utils.php';
echo bonjour("Étudiant")."<br>";

spl_autoload_register(function ($class) {
    require __DIR__ . '/../src/' . $class . '.php';
});

$p = new Personne();
echo $p->saluer()."<br>";
ini_set('display_errors', '1');
error_reporting(E_ALL);
echo $variableNonDefinie."<br>";
?>

</body>
</html>

