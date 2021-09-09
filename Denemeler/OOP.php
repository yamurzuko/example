<?php
/*
  namespace Html;

  class Table {

    public $title = '';
    public $numRows = 0;
    public function message() {

      echo "<p>Table {$this->title} has {$this->numRows} rows.</p>";
    }
  }

  $table = new Table();
  $table->title = "My Table";
  $table->numRows = 5;

*/
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
/*
      class Fruit {

        public $name;
        public $color;

        function set_name($name){
          $this->name =$name;
        }

        function get_name(){
          return $this->name;
        }

        function set_color($color){
          $this->color = $color;
        }

        function get_color(){
          return $this->color;
        }
      }

      $apple = new Fruit();
      $banana = new Fruit();

      $apple->set_name('Apple');
      $apple->set_color('Red');
      $banana->set_name('Banana');
      $banana->set_color('Yellow');

      var_dump($apple instanceof Fruit);

      echo "<br>";
      echo $apple->get_name() "----->";
      echo $apple->get_color() "<br>";
      echo $banana->get_name()"----->";
      echo $banana->get_color();

*/
/*
      class Fruit {

        puclic $name;
        puclic $color;

        function __construct($name, $color){

          $this->name = $name;
          $this->color = $color;
        }
        function get_name(){

          return $this->name;
        }
        function get_color(){

          return $this->color;
        }

      }

        $apple = new Fruit("Apple", "Red");

        echo $apple->get_name();
        echo "<br>";
        echo $apple->get_color();

      }
*/
/*
      class Fruit {

        public $name;
        public $color;

        public function __construct($name, $color){

          $this->name = $name;
          $this->color = $color;
        }
        public function intro(){

          echo "The fruit is {$this->name} and the color is {$this->color}.";
        }

      }

      class Strawberry extends Fruit {

        public function message(){

          echo "Am I a fruit or berry?.";
        }
      }

      $strawberry = new Strawberry("Strawberry", "Red");
      $strawberry->message();
      echo "<br>";
      $strawberry->intro();
*/
/*
      abstract class Car {

        public $name;

        public function __construct($name){

          $this->name = $name;
        }
        abstract public function intro(): string;
      }

      class Audi extends Car {

        public function intro(): string {

          return "Choose German quality! I'm an $this->name !";
        }
      }

      class Volvo extends Car {

        public function intro(): string {

          return "Pround to be Swedish! I'm a $this->name !";
        }
      }

      class Citroen extends Car {

        public function intro(): string {

          return "French extravagance! I'm a $this->name !";
        }
      }

      $audi = new Audi("Audi");
      echo $audi-> intro();
      echo "<br>";

      $volvo = new Volvo("Volvo");
      echo $volvo-> intro();
      echo "<br>";

      $citroen = new Citroen("Citroen");
      echo $citroen-> intro();
      echo "<br>";
*/
/*
      abstract class ParentClass {

        abstract protected function prefixName($name);
      }

      class ChildClass extends ParentClass {

        public function prefixName($name, $separator = " . ", $greet = "Dear"){

          if ($name == "John Doe") {

            $prefix = "Mr. ";
          } elseif ($name == "Jane Doe"){

            $prefix = "Mrs. ";
          }else {

            $prefix = " ";
          }

          return "{$greet} {$prefix}{$separator} {$name}";
        }
      }

      $class = new ChildClass {

        echo $class-> prefixName("John Doe");
        echo "<br>";
        echo $class-> prefixName("Jane Doe");
      }
*/
/*
      interface Animal{

        public function makeSound();
      }

      class Cat implements Animal {

        public function makeSound() {

          echo "Meow";
        }
      }

      class Dog implements Animal{

        public function makeSound(){

          echo "Hav Hav";
        }
      }

      class Bird implements Animal {

        public function makeSound(){

          echo "Cik cik";
        }
      }


      $cat = new Cat();
      $dog = new Dog();
      $bird = new Bird();

      $animals = array($cat, $dog, $bird);

      foreach ($animals as $animal) {

        $animal->makeSound();
        echo "<br>";
      }
*/
/*
      trait message1 {

        public function msg1(){

          echo "OOP is fun!";
        }
      }

      trait message2 {

        public function msg2(){

          echo "OOP reduces code duplication";
        }
      }

      class Welcome{

        use message1;
      }

      class Welcome2{

        use message1, message2;
      }

      $obj = new Welcome();
      $obj->msg1();
      echo "<br>";

      $obj2 = new Welcome2();
      $obj2->msg1();
      echo "<br>";
      $obj2->msg2();
*/
/*
      class greeting {

        public static function welcome() {

          echo "Hello World!";
        }

        public function __construct() {

          self::welcome();
        }
      }

      new greeting();
*/
/*
      class domain {

        protected static function getWebsiteName() {

          return "W3School.com";
        }
      }

      class domainW3 extends domain {

        public $websiteName;
        public function __construct(){

          $this-> websiteName = parent::getWebsiteName();
        }
      }

      $domainw3 = new domainW3;
      echo $domainw3-> getWebsiteName();
*/

#      $table->message();







































    ?>

  </body>
</html>
