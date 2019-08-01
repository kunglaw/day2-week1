<?php 

    // OOP
    // Object Oriented Programming 

    // class => pencetak object 

    // object => entitas / entity yg tercipta dari class 

    // accedd modifier 
     // public -> bisa diakses di semua tempat
     // private -> hanya bisa didalam class itu sendiri
     // protected -> hanya bisa didlaam class itu sendiri dan class turunannya 

    include "inheritence.php";

    class Person {

        private $age = 28; // attr 

        public function getAge() {
            return $this->age;
        }
    }

    class Work {

        // method yang pertama kali dijalankan
        function __construct() {
            echo "<p> Object berhasil dibuat</p>";
        }

        // method dari object nya Work
        function getToWork () { // method 
            $obj = new Person(); // obj adalah object baru 
            $obj->age;

            echo $obj->age;
        }

        function getAgefromPerson() {
            $obj = new Person(); // obj adalah object baru 
            echo $obj->getAge();
        }

        function __destruct()
        {
            echo "<p> Object berakhir </p>";
        }
    }

    $objWork = new Work();

    $objWork->getAgefromPerson();

    
    $objCat = new BelajarOOP\Cat();
    $objAnimal =  new BelajarOOP\Animal();
    $objCat->run();
    echo "<hr>";
    // $objCat->displayHello();

    Cat::displayHello();// ini dari static , ini punya class 

