<?php
namespace App;

class Point
{
    public float $x;
    public float $y;

    public function __construct(float $x = 0.0, float $y = 0.0)
    {
        $this->x = $x;
        $this->y = $y;
    }

    // Перенос по X
    public function moveX(float $dx): void
    {
        $this->x += $dx;
    }

    // Перенос по Y
    public function moveY(float $dy): void
    {
        $this->y += $dy;
    }

    // Перенести на вектор (изменяет координаты точки)
    public function moveByVector(Vector $v): void
    {
        $this->x += $v->x;
        $this->y += $v->y;
    }

    public function __toString(): string
    {
        return "Point({$this->x}, {$this->y})";
    }
}
