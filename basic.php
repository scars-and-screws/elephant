<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h1>Hey I am learning PHP! 🚀</h1>

    <!-- PHP Starts here -->
    <?php
    // 📝 Single-line comment (use // or #)
    # Another way to write a single-line comment
    /* 
       📝 Multi-line comment 
       Use this for longer explanations!
    */

    // 👉 STATEMENT: A single instruction or line of code

    // 🖨️ echo is used to print output on the screen
    echo "Call me DADDY! 😎";
    echo "<br>";

    // 👉 VARIABLES
    // Variables start with "$"
    // The first character must be a letter or underscore (_), not a number
    // Example:
    $myVar = "Hello!";

    // 🧐 var_dump() shows info about a variable (type + value)
    var_dump(99); // int(99)
    echo "<br>";

    // 👉 CONSTANTS
    // Constants are like variables but their value cannot change
    // No "$" sign, usually ALL CAPS
    // Use "const" to define a constant
    const PI = 3.14;
    var_dump(PI); // float(3.14)
    echo "<br>";

    // Another way to define a constant: define("NAME", value)
    define("METHOD", "POST");
    var_dump(METHOD); // string(4) "POST"
    echo "<br>";

    // 👉 DATA TYPES

    // STRING (text)
    $name = "Unknown";
    var_dump($name); // string(7) "Unknown"
    echo "<br>";

    // INTEGER (whole number)
    $age = 69;
    var_dump($age); // int(69)
    echo "<br>";

    // FLOAT (decimal number)
    $size = 6.9;
    var_dump($size); // float(6.9)
    echo "<br>";

    // BOOLEAN (true/false)
    $male = true;
    var_dump($male); // bool(true)
    echo "<br>";

    // NULL (no value)
    $income = null;
    var_dump($income); // NULL
    echo "<br>";

    // ARRAY (list of values)
    $moods = ["Angry😠", "Hungry😋", "Happy😊"];
    echo "I am very $moods[2] right now!"; // Happy😊
    echo "<br>";

    // Another way to create an array
    $body_parts = array("Arm💪", "Leg🦵");
    var_dump($body_parts);
    echo "<br>";

    // Add another mood to the end of the array
    $moods[] = "Sad😔";
    var_dump($moods);
    echo "<br>";

    // ASSOCIATIVE ARRAY (array with named keys)
    // Use strings as keys instead of numbers
    $letters = [
        'A' => "Apple 🍏",
        'B' => "Banana 🍌",
        'C' => "Cherry 🍒"
    ];
    var_dump($letters);
    echo "<br>";

    // 👉 TYPECASTING
    // Change the type of a value (e.g., string to int)
    $position = "69";
    var_dump((int)$position); // int(69)
    echo "<br>";

    // 👉 STRING CONCATENATION (combine strings with .)
    const USER = "John";
    var_dump("Hey, you are logged in Mr. " . USER);

    ?>
    <!-- PHP Ends here -->

</body>

</html>