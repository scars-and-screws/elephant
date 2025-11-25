<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logic</title>
</head>

<body>
    <h1>Logic in php</h1>


    <?php

    // ! IF ELSE STATEMENT
    // An expression is a line of code that evaluates to a value.
    $age = 69;
    if ($age > 40) {
        echo "You are old ass!";
        echo "<br>";
    } else {
        echo "You are young dick!";
        echo "<br>";
    }

    // ! SWITCH STATEMENT
    $gander = "m";
    switch ($gander) {
        case 'm':
            echo "👨";
            break;
        case 'f':
            echo "👩";
            break;

        default:
            echo "💀";
            break;
    }

    // ! MATCH STATEMENT
    $status = "pending";
    $message = match ($status) {
        "approved" => "Your request is approved.",
        "pending" => "Your request is pending.",
        "rejected" => "Your request was rejected.",
        default => "Unknown status.",
    };
    echo "<br>" . $message;

    // ! FUNCTIONS IN PHP
    // Function without parameter
    function greet()
    {
        echo "<br>Hello from a function without parameters!";
    }
    // calling function
    greet();

    // Function with parameter
    function greet_with_name($name)
    {
        echo "<br> Hey $name !";
    };
    // calling function with argument
    greet_with_name("John");

    // Function with default parameter
    function greet_with_default($name = "Guest")
    {
        echo "<br> Hello $name !";
    }
    // calling function without argument
    greet_with_default();

    // Function with return value
    function add($a, $b)
    {
        return $a + $b;
    };
    // calling function and storing return value in a variable
    $sum = add(5, 10);
    echo "<br>The sum is: $sum";

    // Function with return type
    function divide($a, $b): float
    {
        if ($b == 0) {
            throw new Exception("Division by zero is not allowed.");
        }
        return $a / $b;
    };
    $sum = divide(5, 10);
    echo "<br>The division result is: $sum";

    // Type hinting in function parameters
    function subtract(int $a, int $b): int
    {
        return $a - $b;
    };
    $sum = subtract(5, 10);
    echo "<br>The subtraction result is: $sum";


    // ! ARROW FUNCTIONS
    $multiply = fn($x, $y) => $x * $y;
    echo "<br> The result from multiply function is: " . $multiply(5, 10);

    // ! ANONYMOUS FUNCTIONS
    $greet_anonymous = function ($name) {
        echo "<br>Hello, $name!";
    };
    // calling anonymous function
    $greet_anonymous("John");











    ?>

</body>

</html>