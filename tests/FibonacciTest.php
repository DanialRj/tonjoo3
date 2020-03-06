<?php

class FibonacciTest extends TestCase
{
    public function testFibonacci()
    {
        $this->get("/api/numbers/fibo/rand()");
        $this->seeStatusCode(200);
    }

    public function testFibonacciSum()
    {
        $this->get("/api/numbers/fibo/rand()/rand()");
        $this->seeStatusCode(200);
    }
}