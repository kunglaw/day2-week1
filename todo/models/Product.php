<?php 
    class Product {

        private $id;
        private $name;

        static function getAll() {
            $mysqli = new mysqli();
            $result = $mysqli->query("SELECT * FROM products ");
            return $result->fetch_assoc(); // array
        }

        function insert() {

        } 
    }