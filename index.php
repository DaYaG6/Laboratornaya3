<?php
require 'vendor/autoload.php';

use App\MagicClass;

echo "=== MagicClass demo ===\n";

// Создание объекта (вызовет __construct)
$mc = new MagicClass();

// Попытка вывести объект как строку (вызовет __toString)
echo $mc;

// Вызов как функции (вызовет __invoke)
$mc('arg1', 'arg2');

// Доступ к несуществующему свойству (вызовет __get и __set)
$mc->foo = 'bar';    // __set
echo $mc->foo . "\n"; // __get

// Проверка isset/unset
isset($mc->foo);     // __isset
unset($mc->foo);     // __unset

// Вызов несуществующего метода (вызовет __call)
$mc->someMethod('x', 'y');

// Вызов несуществующего статического метода (вызовет __callStatic)
MagicClass::someStatic('a', 'b');

// Клонирование (вызовет __clone)
$mc2 = clone $mc;

// Сериализация и десериализация (вызовет __sleep и __wakeup)
$s = serialize($mc);
$mc3 = unserialize($s);

// var_dump (вызовет __debugInfo)
var_dump($mc);

echo "=== End of MagicClass demo ===\n";
