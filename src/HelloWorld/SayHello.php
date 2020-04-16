<?php

namespace HelloWorld;

class SayHello
{
    public function greet($name = "World")
    {
        return "Hello: " . $name;
    }
}