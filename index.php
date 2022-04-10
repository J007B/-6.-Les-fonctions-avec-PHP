<?php 

$animal = 'le singe';
$element = 'l\'air';

function writeSecretSentence(string $animal, string $element):string
{
    return $animal.' '.'s\'incline face à'.' '.$element;
}

echo writeSecretSentence($animal, $element);