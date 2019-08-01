<?php 

    /*
        polymorphisme
        override

        abstract
        interface

    */
    namespace BelajarOOP;
        class Animal { 

            function __construct() {
                echo "Animal has created";
            }
    
            private $isVertebrate;
            private $isMulticellular;
            private $classification;
    
            private $test = "ini adalah test";
    
            // ini bukan method class, tetapi method nya object 
            public function moving() {
                return "Animal alway moving";
            }
    
    
        }
        

        class Cat extends Animal {
            
            public $leg = 4;
            public static $legs= 20;
    
            function __construct()
            {
                Animal::__construct();
                echo Cat::$legs."<br>";
            }
            
            function run() {
               // echo $this->test; // gak bisa diakses karena private
            }
    
            static function displayHello() {
                // echo $this->leg; // tidak bisa pake this 
              
                echo "<hr>";
                echo "Hello iam a cat";
            }
        }
    
    
