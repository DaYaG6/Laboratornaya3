<?php
require 'vendor/autoload.php';

use App\Point;
use App\Vector;

echo "=== Geometry demo ===\n";

// Создаём точку T1 с произвольными координатами
$T1 = new Point(2.5, -1.0);
echo "T1 = $T1\n";

// Произвольный вектор V1
$V1 = new Vector(3.0, 4.0); // длина будет 5
echo "V1 = $V1, length = " . $V1->length() . "\n";

// Нулевой вектор V2
$V2 = new Vector(0.0, 0.0);
echo "V2 = $V2, isZero = " . ($V2->isZero() ? 'true' : 'false') . "\n";

// Вектор V3 перпендикулярный V1
// Для того чтобы создать перпендикулярный вектор к (x,y) — можно взять (-y, x)
$V3 = new Vector(-$V1->y, $V1->x);
echo "V3 = $V3, length = " . $V3->length() . "\n";

// Проверим перпендикулярность V1 и V3
echo "V1 and V3 perpendicular? " . ($V1->isPerpendicular($V3) ? 'yes' : 'no') . "\n";

// Перенесём точку T1 на вектор V1
$T1->moveByVector($V1);
echo "T1 after moving by V1: $T1\n";

echo "=== End of Geometry demo ===\n";
