<?php
/**
 * Class DB - подулючение к БД
 */

class DB
{

    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'db_test';
    private $db;

    public function __construct()
    {
        $this->db = @mysql_connect($this->host, $this->user, $this->password);
        if (!$this->db) {
            exit('Ошибка при подключении к базе данных');
        }
        if (!mysql_select_db($this->database, $this->db)) {
            exit('База данных не существует');
        }
            mysql_query('SET NAMES utf8');

            return $this->db;
    }
}