<?php
$message = 'hello';

// Inherit by-reference
$example = function () use (&$message) {
    var_dump($message);
};

$message="test";
$example();