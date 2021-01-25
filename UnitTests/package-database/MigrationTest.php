<?php namespace ZN\Database;

use Migration;

class MigrationTest extends Test\Constructor
{
    public function testCreate()
    {
        Migration::create('Blog');

        $this->assertTrue(is_file(MODELS_DIR . 'Migrations/Blog.php'));
    }

    public function testCreateVersion()
    {
        Migration::create('Blog', 1);

        $this->assertTrue(is_file(MODELS_DIR . 'Migrations/BlogVersion/001.php'));
    }

    public function testDelete()
    {
        $this->assertIsBool(Migration::delete('Blog'));
    }

    public function testDeleteVersion()
    {
        $this->assertIsBool(Migration::delete('Blog', 1));
    }

    public function testDeleteAll()
    {
        $this->assertIsBool(Migration::deleteAll());
    }
}