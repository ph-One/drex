<?php

  namespace db;

  function init(): \SQLite3
    {
      $db = \db\createDb();
      \db\createTable($db);
      return $db;
    }


  function createDb(string $dbName = "elwood"): \SQLite3
    {
      return new \SQLite3($dbName . ".db");
    }


  function createTable(\SQLite3 $db): \SQLite3
    {
      $db->exec('DROP TABLE IF EXISTS registry');
      $db->exec('CREATE TABLE registry (protocol varchar(255), secure boolean, address varchar (255))');
      return $db;
    }

// EOF
