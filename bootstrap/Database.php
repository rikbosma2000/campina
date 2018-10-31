<?php

class Database
{
    /** @var mysqli $connection */
    protected $connection;

    /** @var string $dbServer */
    protected $dbServer = '';

    /** @var string $dbUser */
    protected $dbUser = '';

    /** @var string $dbPassword */
    protected $dbPassword = '';

    /** @var string $dbName */
    protected $dbName = '';

    public function __construct(string $dbServer, string $dbUser, string $dbPassword, string $dbName)
    {
        $this->dbServer = $dbServer;
        $this->dbUser = $dbUser;
        $this->dbPassword = $dbPassword;
        $this->dbName = $dbName;

        $this->connect();
    }

    /**
     * Make a connection with the database.
     */
    public function connect()
    {
        /** @var mysqli $mysqli */
        $mysqli = new mysqli($this->dbServer, $this->dbUser, $this->dbPassword, $this->dbName);

        if ($mysqli === false) {
            die ('ERROR: Could not connect to database. ' . $mysqli->connect_error);
        }

        $this->connection = $mysqli;
    }

    /**
     * @return mysqli
     */
    public function getConnection(): mysqli
    {
        return $this->connection;
    }
}