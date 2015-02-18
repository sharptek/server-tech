<?php
function foo(&$var)
{
    $var++;
}

$a=5;
foo($a);
// $a здесь равно 6
echo $a;
?>