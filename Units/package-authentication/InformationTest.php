<?php namespace ZN\Authentication;

class InformationTest extends \PHPUnit\Framework\TestCase
{
    public function testError()
    {
        $class = new Information;
        
        $class->error();

        $this->assertSame('You are not registered on the system or your username is incorrect!', Properties::$error);
    }

    public function testSuccess()
    {
        $class = new Information;

        $class->success();

        $this->assertSame(NULL, Properties::$success);
    }
}