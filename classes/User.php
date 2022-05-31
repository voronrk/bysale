<?php

namespace Classes;

class User
{
    public $avatar;
    public $name;
    public $phone;

    function __construct($params) {
        foreach($params as $key => $param) 
        {
            $this->$key = $param;
        }
    }
}