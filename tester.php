<?php
/*
$array = array('lastname', 'email', 'phone');
$comma_separated = implode(",", $array);

//echo $comma_separated; // lastname,email,phone

// Empty string when using an empty array:

var_dump(implode('hello', array())); // string(0) ""

declare(strict_types=1);

$a = array( 'one','two','three' );
$b = array( '1st' => 'four', 'five', '3rd' => 'six' );
print_r ($a);
echo implode( ',', $a ),'/', implode( ',', $b );

// Example 1
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
var_dump($pieces);


<---!
//function
Function name(parameters){
  }
  add/subtract/(arguments)
functions are returned by a variable.
  --->*/

  function infactious(){
    echo"you are smart";
    echo "you are great"
    }
    infactious()
    infactious()

    function coundown(){
      echo"4,3,2,1";
      return "blastoff!";
    }
    $return_value=countdown();//to return functions.
    echo $return_value;


   //Return values
  function returnFive()
  {
    return 5;
  }
  return()
   /*When we define a function,
  we can also define parameters.
   A parameter is a variable which serves as a placeholder throughout
  the function’s code block. When the function is invoked,
  it’s invoked with a specific value. As the computer executes the
  function, it replaces each occurrence of the parameter with the value
  that was passed in.
  The actual value passed in is known as an argument.
*/
function sayCustomHello($name)
{
  echo "Hello, $name!";
};

sayCustomHello(); // Causes an error!
We can be more flexible about parameters when defining our functions. We want to
print "Hello, [name passed in]!" if an argument is provided, and "Hello, old chum!" only if no argument is passed in.

We can accomplish this by providing a default value for the $name parameter:

function greetFriend($name = "old chum")
{
  echo "Hello, $name!";
};

greetFriend("Marvin"); // Prints: Hello, Marvin!
greetFriend(); // Prints: Hello, old chum!
In the code above, we defined the greetFriend() function. It has a parameter $name with a default value of “old chum”. We invoked the function twice:

The first time, we passed in "Marvin" as the argument. During that invocation, the function assigned "Marvin" to $name so Hello, Marvin! was printed.
The second time we invoked the function with no argument. Therefore, the default value of "old chum" was assigned to $name and Hello, old chum! was printed.
Write a function calculateTip() which takes a number representing the total cost of a meal as its first argument. It should also take a second, optional argument—an integer representing the percent tip desired (eg. 25 will indicate a 25% tip should be calculated). If no second argument is passed in, the function should default to a 20% tip. The function should return the new total—the previous total plus the calculated tip.

For example:

calculateTip(100, 25) should return 125
calculateTip(100)
