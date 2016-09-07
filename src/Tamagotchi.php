<?php
    class Tamagotchi
    {
        private $food;
        private $attention;
        private $rest;

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

    }
 ?>
