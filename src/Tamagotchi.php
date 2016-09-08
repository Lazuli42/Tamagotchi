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
            $_SESSION['tamagotchi'] = $this;
        }

        static function getTamagotchi()
        {
            return $_SESSION['tamagotchi'];
        }

        function feed()
        {
            if ($this->food < 100) {
            $this->food += 25;
            $this->rest -= 10;
            $this->attention -= 5;
        }
        if ($this->food >= 100) {
            echo $this->name . " is full of souls.";
        }
    }

        function rest()
        {
            if ($this->rest < 100) {
            $this->rest += 25;
            $this->attention -= 5;
            $this->food -= 25;
        }
        if ($this->rest >= 100) {
            echo $this->name . " is no wonger sweepy.";
        }
    }

    function attend()
    {
        if ($this->attention < 100) {
        $this->rest -= 20;
        $this->attention += 15;
        $this->food -= 10;
    }
    if ($this->attention >= 100) {
        echo $this->name . " desires boredom. Enough doting, human.";
    }
}

}

?>
