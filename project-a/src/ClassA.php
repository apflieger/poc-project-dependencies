<?php

class ClassA
{
    public function __construct()
    {
        new ClassB();
        printf("A says \"Hello\"\n");
    }
}