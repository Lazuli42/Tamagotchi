<?php
    class Tamagotchi
    {
        public $name;
        private $food;
        private $attention;
        private $rest;

        function __construct($name)
        {
            $this->name = $name;
            $this->food = 50;
            $this->attention = 50;
            $this->rest = 50;
        }

        function setName($new_name)
        {
            $this->name = (string) $new_name;
        }

        function getName()
        {
            return $this->name;
        }

        function setFood($new_food)
        {
            $this->food = $new_food;
        }

        function getFood()
        {
            return $this->food;
        }

        function setAttention($new_attention)
        {
            $this->attention = $new_attention;
        }

        function getAttention()
        {
            return $this->attention;
        }

        function setRest($new_rest)
        {
            $this->rest = $new_rest;
        }

        function getRest()
        {
            return $this->rest;
        }

        function save()
        {
            array_push($_SESSION['tamagotchi_names'], $this);
        }

        static function getAll()
        {
            return $_SESSION['tamagotchi_names'];
        }

    }
 ?>
