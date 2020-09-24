<?php
    class Square {
        private $lato;
        public function __construct($lato) {
            $this -> setLato($lato);
        }
        public function getLato() {
            return $this -> lato;
        }
        public function setLato($lato) {
            // controlli integrita'
            $this -> lato = $lato;
        }
        public function getArea() {
            return $this -> lato * $this -> lato;
        }
        public function getPer() {
            return 4 * $this -> lato;
        }
        private function strValues() {
            return "lato: " . $this -> lato . "<br>"
                 . "area: " . $this -> getArea() . "<br>"
                 . "per : " . $this -> getPer() . "<br>";
        }
        public function __toString() {
            return "Square:<br>" . $this -> strValues() . "<br>";
        }
    }
    class Cube extends Square {
        public function getVolume() {
            return $this -> getArea() * $this -> getLato();
        }
        public function getSuper() {
            return 6 * $this -> getArea();
        }
        private function strValues() {
            return "lato: " . $this -> getLato() . "<br>"
                 . "vol : " . $this -> getVolume() . "<br>"
                 . "sup : " . $this -> getSuper() . "<br>";
        }
        public function __toString() {
            return "Cube:<br>" . $this -> strValues() . "<br>";
        }
    }
    $s1 = new Square(1);
    $s2 = new Square(5);
    $s3 = new Square(7);
    $c1 = new Cube(10);
    $c2 = new Cube(12);
    $c3 = new Cube(25);
    echo
          $s1 . "<br>"
        . $s2 . "<br>"
        . $s3 . "<br>"
        . $c1 . "<br>"
        . $c2 . "<br>"
        . $c3 . "<br>";