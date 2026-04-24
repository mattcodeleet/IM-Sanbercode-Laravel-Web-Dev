<?php
    class Animal{
        public $name;
        public $legs=4;
        public $cold_blood="No";

        public function __construct($string){
            $this->name = $string;
        }
    }
?>