<?php namespace ZN\Database;

use DB;
use Config;
use DBForge;

class DatabaseExtends extends \PHPUnit\Framework\TestCase
{
    public function __construct()
    {
        parent::__construct();

        Config::database('database', 
        [
            'driver'   => 'sqlite',
            'database' => 'Internal/package-database/resources/testdb',
            'password' => '1234'
        ]);

        DBForge::createTable('IF NOT EXISTS persons',
        [
            'name'    => [DB::varchar(255)],
            'surname' => [DB::varchar(255)],
            'phone'   => [DB::varchar(255)]
        ]);
    }
}