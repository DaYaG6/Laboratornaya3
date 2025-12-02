<?php
namespace App;

class MagicClass
{
    private $data = [];

    public function __construct()
    {
        echo "__construct called\n";
    }

    public function __destruct()
    {
        echo "__destruct called\n";
    }

    public function __toString()
    {
        return "__toString called\n";
    }

    public function __invoke(...$args)
    {
        echo "__invoke called with args: " . implode(', ', $args) . "\n";
    }

    public function __get($name)
    {
        echo "__get called for '$name'\n";
        return $this->data[$name] ?? null;
    }

    public function __set($name, $value)
    {
        echo "__set called for '$name' = '$value'\n";
        $this->data[$name] = $value;
    }

    public function __isset($name)
    {
        echo "__isset called for '$name'\n";
        return isset($this->data[$name]);
    }

    public function __unset($name)
    {
        echo "__unset called for '$name'\n";
        unset($this->data[$name]);
    }

    public function __call($name, $arguments)
    {
        echo "__call called for instance method '$name' with args: " . implode(', ', $arguments) . "\n";
    }

    public static function __callStatic($name, $arguments)
    {
        echo "__callStatic called for static method '$name' with args: " . implode(', ', $arguments) . "\n";
    }

    public function __sleep()
    {
        echo "__sleep called\n";
        return ['data'];
    }

    public function __wakeup()
    {
        echo "__wakeup called\n";
    }

    public function __clone()
    {
        echo "__clone called\n";
    }

    public function __debugInfo()
    {
        echo "__debugInfo called\n";
        return ['info' => 'debug'];
    }
}
