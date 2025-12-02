<?php
namespace App;

class Vector
{
    public float $x;
    public float $y;

    public function __construct(float $x = 0.0, float $y = 0.0)
    {
        $this->x = $x;
        $this->y = $y;
    }

    // Длина вектора: sqrt(x^2 + y^2)
    public function length(): float
    {
        return sqrt($this->x * $this->x + $this->y * $this->y);
    }

    // Является ли нулевым (оба компонента нулевые)
    public function isZero(float $eps = 1e-9): bool
    {
        return (abs($this->x) < $eps) && (abs($this->y) < $eps);
    }

    // Проверка перпендикулярности другому вектору:
    // два вектора перпендикулярны, если их скалярное произведение = 0
    public function isPerpendicular(Vector $other, float $eps = 1e-9): bool
    {
        $dot = $this->x * $other->x + $this->y * $other->y;
        return abs($dot) < $eps;
    }

    public function __toString(): string
    {
        return "Vector({$this->x}, {$this->y})";
    }
}
