<?php

Trait Database
{
    private function connect()
    {
        try {
            $dsn      = "mysql:hostname=".DBHOST.";dbname=".DBNAME;
            $user     = DBUSER;
            $password = DBPASS;
        
            $conn = new PDO($dsn, $user, $password, array(
                PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', //after php5.3.6
            ));
    
            //$p->exec('SET NAMES utf8');
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

        return $conn;
    }

    public function query($query, $data = [])
    {
        $conn = $this->connect();

        $stmt = $conn->prepare($query);
        $check = $stmt->execute($data);

        if($check) {
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
            if(is_array($result) && count($result))
            {
                return $result;
            }
        }

        return false;
    }
}