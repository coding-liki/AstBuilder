<?php
declare(strict_types=1);

use Test\Test;

require_once 'vendor/CodingLiki/OoAutoloader/Autoloader.php';

$program = new Programm('', 'A: a; B: b n;');

$program->exec('');

$test = new Test();

$test->ech();