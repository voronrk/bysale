<?php

namespace Ad;

class Ad
{
    public $img;
    public $title;
    public $description;
    public $price;
    public $username;
    public $userphone;

    public function update() {
        
    }

    function __construct($params) {
        foreach($params as $key => $param) 
        {
            $this->$key = $param;
        }
    }
}