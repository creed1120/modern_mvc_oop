<?php

class Model
{
    use Database;
    
    function test()
    {
        $sql = "SELECT * FROM users";

        $result = $this->query($sql);

        show($result);
    }
}