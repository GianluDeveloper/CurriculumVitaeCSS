<?php

// sicurezza da inclusioni dirette
if (!defined('SECURITY')) {
    die("Don't do that.");
}
include 'costanti.php';

class db
{
    private $conn = '';
    public function __construct()
    {
        $this->init();
    }
    public function init()
    {
        $this->conn = new mysqli(HOST, USER, PASS, DBNAME);
    }
    public function query($sql)
    {
        $result = $this->conn->query($sql);
        return $result;
    }
    public function escape($data)
    {
        return $this->conn->real_escape_string($data);
    }
    public function getAllRowsOf($table)
    {
        $rows = [];
        $tableEscaped = $this->escape($table);
        $results = $this->query("SELECT * FROM `$tableEscaped` WHERE 1;");

        while ($row = $results->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }
}
