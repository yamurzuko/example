<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Deneme </title>
  </head>
  <body>

    <?php
/*
    echo "Deneme Yazisi <br>";
    echo "Deneme Yazisi1 <br>";
    echo "Deneme Yazisi2 <br>";

    $color = "red";
    echo "My car is ". $color. "<br>";
    echo "My house is". $COLOR."<br>";
    echo "My boat is". $Color. "<br>";


    $x = 5 +  15  + 5;
    echo $x;

    $txt = "Hello World! <br>";
    $x = 5;
    $y = 17;

    echo $txt, $x + $y;

    $txt = "yamurzuko";
    echo "I love $txt !";
*/

  /*  $x = 5; // Global scope.

    function myTest() {

      // using x inside this function will generate an error.
      echo "<p> Variable x inside function is: $x </p>";
    }
    myTest();

    echo "<p> Variable x outside function is : $x </p>";
*/

  /*  function myTest() {

      $y = 5; // Local scope.

      echo "<p> Variable y inside function is: $y </p>";
    }
    myTest();

    echo "<p> Variable y outside function is: $y </p>";
*/
/*
    $x = 5;
    $y = 7;

    function myTest() {

      global $x, $y;
      $y = $x + $y;
    }
    myTest();

    echo "Variable y is: $y" ;
*/
/*    $x = 5;
    $y = 8;

    function myTest() {

      $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    myTest();

    echo "Variable y is: $y ";
*/
/*
    function myTest(){

      static $x = 0;
      echo $x ;

      $x++;
    }

    myTest();
    myTest();
    myTest();
*/
/*
    echo "<h2> PHP is Fun! </h2>";
    echo "Hello World!<br>";
    echo "I'm about to learn PHP! <br> ";
    echo "This", "string", "was", "made", "with multıple parameters.";
*/
/*
    $txt1 = "Learn PHP";
    $txt2 = "Yamurzuko";

    $x = 5;
    $y = 3;

    echo "<h2> $txt1 </h2>";
    echo "Study PHP at $txt2 <br>";
    echo $x + $y;
*/
/*
    $x = 5985;
    var_dump($x); # The PHP var_dump() function returns the data type and value.
    echo "<br>";

    $y = 10.365;
    var_dump($y);
    echo "<br>";

    $cars = array("Volvo", "BMW", "Toyota");
    var_dump($cars);
*/
/*
    class Car {

      public $color;
      public $model;
      public function __construct($color, $model) {

        $this->color = $color;
        $this->model = $model;
      }

      public function message() {

        return "My car is a " . $this->color . " " . $this->model . "!";
      }
    }

    $myCar = new Car("black", "Volvo");
    echo $myCar->message();
    echo "<br>";

    $myCar = new Car("red", "Toyota");
    echo $myCar->message();
*/
/*
    echo strlen("Hello World!"); # Length of the string.
    echo "<br>";

    echo str_word_count("Hello World!"); # Counts the number of world in a string.
    echo "<br>";

    echo strrev("Hello World!"); # Reverses a string.
    echo "<br>";

    echo strpos("Hello World!", "World"); # Searches for a specific text within a string.
    echo "<br>";

    echo str_replace("World", "Yamurzuko", "Hello World!");
    echo "<br>";
*/
/*
    $x = 5985;
    var_dump(is_int($x));
    echo "<br>";                       // Check if the type of a variable is integer:

    $y = 59.85;
    var_dump(is_int($y));
    echo "<br>";

    $z = 10.365;
    var_dump(is_float($z));
    echo "<br>";

    $t = 1.9e411;
    var_dump($t);
    echo "<br>";

    $u = acos(8);
    var_dump($u);
    echo "<br>";
*/
/*
    $x = 5985;
    var_dump(is_numeric($x));

    $x = "5985";
    var_dump(is_numeric($x));

    $x = "59.85" + 100;
    var_dump(is_numeric($x));

    $x = "Hello";
    var_dump(is_numeric($x));
*/
/*
    $x = 23465.768;
    $int_cast = (int)$x;      // Cast float to int.
    echo $int_cast;

    echo "<br>";

    $y = "23465.768";
    $int_cast = (int)$x;      // Cast string to int.
    echo $int_cast;

*/
/*
    define("Greeting", "Welcome to W3School.com!");   // Create a constant with a case-sensitive name.
    echo Greeting;
    echo "<br>";

    define("FAREWELL", "Welcome to W3School.com!", true); // ???????????????????
    echo FAREWELL;
    echo "<br>";

    define("cars", [
      "Alfa Romeo",         //????????????????????
      "BMW",
      "Toyota"
    ]);
    echo cars[0];

    define("GREETING", "Welcome to W3School!.com");

    function myTest(){                              // This example uses a constant inside a function,
                                                    // even if it is defined outside the function.
        echo GREETING;
    }

   myTest();
*/
/*
    $a = date("12");

    if ($a < 10) {

      echo "Have a Good Morning!";
    }elseif ($a < 15){

      echo "Have a Good Day!";
    }else {

      echo "Have a Good Night!";
    }
*/
/*
    $favcolor = "Blue";

    switch ($favcolor) {
      case 'Red':
        echo "Your favorite color is Red!";
        break;
      case 'Black':
        echo "Your favorite color is Black!";
        break;
      case 'Yellow':
        echo "Your favorite color is Yellow!";
        break;
      default:
        echo "Your favorite color neither Red, Black, nor Green!";
        break;
    }
*/
/*
    $x = 1;

    while ($x <= 100) {

      echo "The number is: $x <br>";
      $x += 10;
    }
    echo "<br>";

    $y = 1;

    do {

      echo "The number is: $y <br>";
      $y++;
    } while ($y <=6);
    echo "<br>";

    for ($z = 0; $z <= 100; $z+=10) {

      echo "The number is: $z <br>";
    }

    $colors = array('Black', 'White', 'Red', 'Blue', 'Green');

    foreach ($colors as $value) {

      echo "$value <br>";
    }

    $age = array('Peter' => '35', 'Ben' => '37', 'Joe' => '43');

    foreach ($age as $x => $value) {

      echo "$x => $value <br>";
    }

    for ($t=0; $t < 10 ; $t++) {

      if ($t == 4) {
        break;
      }

      echo "The number is: $t <br>";
    }
    echo "<br><br>";
    for ($u=0; $u < 10; $u++) {

      if ($u == 4) {
        continue;
      }

      echo "The number is: $u <br>";
    }
*/
/*
    function familyName($fname) {

      echo "$fname Refsnes. <br>";
    }

    familyName("Jani");
    familyName("Hege");
    familyName("Stale");
    familyName("Kai Jim");
    familyName("Borge");

    echo "<br>";

    function family($name, $year) {

      echo "$fname Refsnes. Born in $year <br>";
    }

    family("Jani", "1975");
    family("Hege", "1968");
    family("Stale", "1977");
    family("Kai Jim", "1970");
    family("Borge", "1955");

    function addNumbers($a, $b){

      return $a + $b;
    }

    echo addNumbers(5, "5 days");
*/

  //  declare(strict_types = 1);
/*    function setHeight(int $minheight = 50) {

      echo "The height is: $minheight <br>";
    }

    setHeight(350);
    setHeight();
    setHeight(135);
    setHeight(80);

    function sum(int $x, int $y) {

      $z = $x + $y;
      return $z;
    }

    echo "5 + 10 = " . sum(5,10). "<br>";
    echo "7 + 13 = " . sum(7,13). "<br>";
    echo "2 + 4 = " . sum(2,4). "<br>";


    function addNumbers(float $a, float $b) : int {

      return $a + $b;
    }

    echo addNumbers(1.2, 5.2);
    echo "<br>";

    function add_Five(&$value){

      $value += 5;          // ???????????????
    }

    $num = 2;
    add_Five($sum);
    echo $num;
*/
/*
    $cars = array('Volvo', 'BMW', 'Toyota');

//    echo "I like " . $cars[0]. ", " . $cars[1] . " and " . $cars[2] . ".";

    $arrlength = count($cars);

    for ($i=0; $i < $arrlength; $i++) {

      echo $cars[$i];
      echo "<br>";
    }
*/
/*
    $age = array('Peter' => '35', 'Ben' => '37', 'Joe' => '43');

//    echo "Peter is " . $age['Peter']. " years old.";

    foreach ($age as $x => $value) {

      echo "Key = " . $x . ", Value = " . $value;
      echo "<br>";
    }
*/
/*
    $cars = array(
            array('Volvo', 22, 18 ),
            array('BMW', 15, 13 ),
            array('Saab', 5, 2 ),
            array('Land Rover', 17, 15 )
    );

    echo $cars[0][0]. ": in stock: " . $cars[0][1] . ", sold: " . $cars[0][2]. ".<br>" ;
    echo $cars[1][0]. ": in stock: " . $cars[1][1] . ", sold: " . $cars[1][2]. ".<br>" ;
    echo $cars[2][0]. ": in stock: " . $cars[2][1] . ", sold: " . $cars[2][2]. ".<br>" ;
    echo $cars[3][0]. ": in stock: " . $cars[3][1] . ", sold: " . $cars[3][2]. ".<br>" ;


    for ($row = 0; $row < 4; $row++) {

      echo "<p><b>Row number $row</b></p>";
      echo "<ul>";

      for ($col = 0; $col < 3; $col++) {

        echo "<li>".$cars[$row][$col]."</li>";
      }
        echo "</ul>";
    }
*/
/*
                                                      PHP dizi sıralama işlevleri:

                                                      sort() - dizileri artan düzende sıralar
                                                      rsort() - dizileri azalan düzende sıralar
                                                      asort() - ilişkisel dizileri değere göre artan düzende sıralar
                                                      ksort() - ilişkisel dizileri anahtara göre artan düzende sıralar
                                                      arsort() - ilişkisel dizileri değere göre azalan düzende sıralar
                                                      krsort() - ilişkisel dizileri anahtara göre azalan düzende sıralar
*/
/*
    $x = 75;
    $y = 25;

    function addition() {

      return $GLOBALS['x'] + $GLOBALS['y'];
    }

    echo addition();
*/
/*
    $str = "Visit W3Schools";
    $pattern = "/w3schools/i";

    echo preg_match($pattern, $str);
    echo "<br>";

    $str = "The rain in SPAIN falls mainly on the plains.";
    $pattern = "/ain/i";

    echo preg_match_all($pattern, $str);
    echo "<br>";

    $str = "Visit Microsoft!";
    $pattern = "/microsoft/i";

    echo preg_replace($pattern, "W3Schools" , $str);
*/


    ?>





  </body>
</html>
