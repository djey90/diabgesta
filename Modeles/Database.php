<?php

namespace Modeles;

class Database
{
    protected $id;
    public $connexion;

    public function __construct()
    {
        $this->connexion = new \PDO('mysql:host=localhost;dbname=diabgesta', 'root', '', [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_WARNING, \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']);
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
}
