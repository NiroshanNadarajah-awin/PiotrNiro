<?php

class DB
{
    private $_niro = "1";

    private $_mysqli;

    /**
     * @var sting Superb query to a database.
     */
    private $_query;
    private $_results = array();
    private $_count = 0;

    public static $instance = null;

    /**
     * @return DB|null
     */
    public static function getInstance()
    {
        // if '!isset' means = if the perticular this is set or not
        // 'self' means = referencing this perticular class

        if (!isset(self::$instance)) {
            self::$instance = new DB();
            self::$instance->initConnection();
        }

        return self::$instance;
    }

    private function initConnection()
    {
        echo "Running the init\n";

        $this->_mysqli = new mysqli('127.0.0.1', 'root', '', 'reports');

        if ($this->_mysqli->connect_error) {

            die($this->_mysqli->connect_error);
        }
    }

    public function query($sql)
    {
        if ($this->_query = $this->_mysqli->query($sql)) {

            while ($row = $this->_query->fetch_object()) {
                $this->_results[] = $row;
            }

            $this->_count = $this->_query->num_rows;
        }

        return $this;
    }


    public function results()
    {
        return $this->_results;
    }


    public function count()
    {
        return $this->_count;
    }

    /**
     * @return string
     */
    public function getNiro()
    {
        return $this->_niro;
    }

    /**
     * @param string $niro
     */
    public function setNiro($niro)
    {
        $this->_niro = $niro;
    }

}
