<?php

namespace App;

class Db
{
    protected $dbh;

    public function __construct()
    {
        $config = include __DIR__ . '/../config.php';
        $dsn = $config['driver'] . ':host=' . $config['host'] . ';dbname=' . $config['dbname'];
        $this->dbh = new \Pdo($dsn, $config['username'], $config['pass']);
    }

    public function execute(string $sql)
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute();

    }

    public function query(string $sql, array $data=[])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($data);
        return $sth->fetchAll(\PDO::FETCH_OBJ);
    }
}