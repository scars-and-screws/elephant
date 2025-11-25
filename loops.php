<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOOPS</title>
</head>

<body>
    <h1>Loops in php</h1>

    <?php
    // ! WHILE LOOP
    $count = 0;
    while ($count < 5) {
        echo "Count from while loop: $count<br>";
        $count++;
    }
    echo "<br>";

    // ! DO WHILE LOOP
    $count = 0;
    do {
        echo "Count from do-while loop: $count<br>";
        $count++;
    } while ($count < 5);
    echo "<br>";

    // ! FOR LOOP
    for ($i = 0; $i < 5; $i++) {
        echo "Count from for loop: $i<br>";
    }
    echo "<br>";

    // ! FOREACH LOOP
    $fruits = ["Apple", "Banana", "Cherry"];
    foreach ($fruits as $fruit) {
        echo "Fruit: $fruit<br>";
    }
    echo "<br>";


    // ! BREAK AND CONTINUE
    for ($i = 0; $i < 10; $i++) {
        echo "Current number: $i<br>";
        if ($i == 5) {
            echo "Breaking the loop at 5.<br>";
            break; // Exits the loop when $i is 5
        }
        if ($i % 2 == 0) {
            echo "Skipping even number: $i<br>";
            continue; // Skips the rest of the loop iteration for even numbers
        }
        echo "<br>";
    }
    echo "<br>";

    // ! NESTED LOOPS
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 2; $j++) {
            echo "Outer loop: $i, Inner loop: $j<br>";
        }
    }
    echo "<br>";

    // ! LOOPING THROUGH ASSOCIATIVE ARRAYS
    $person = [
        "name" => "John",
        "age" => 30,
        "city" => "New York"
    ];
    foreach ($person as $key => $value) {
        echo "$key: $value<br>";
    }
    echo "<br>";

    // ! Exercise 
    // 1. Create function for accepting the color as a string.
    // 2. Create an array resistor colors with their relative numeric code
    // 3. Return a numeric code based on the color's name
    function color_code(string $color): int
    {
        $colors = ["black" => 0, "brown" => 1, "red" => 2, "orange" => 3, "yellow" => 4, "green" => 5, "blue" => 6, "violet" => 7, "grey" => 8, "white" => 9];
        return $colors[$color];
    }
    echo color_code("grey");
    echo "<br>";

    // Another exercise
    function two_fer(string $name = "you"): string
    {
        return "<br> One for {$name}, one for me.";
    }
    echo two_fer();
    echo two_fer("John");


    ?>
</body>

</html>s
<!-- hey it's yo boy from the  -->