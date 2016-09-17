<?php

class ClassB
{
    public function __construct()
    {
        new ClassA();
        printf("B says \"Hello\"\n");
    }
}