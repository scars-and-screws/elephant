<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP in PHP 🚗</title>
</head>

<body>
    <h1>PHP OOP Basics 🚀</h1>

    <?php
    // ! OOP = Object Oriented Programming 🧱
    // ? OOP uses classes and objects to organize code

    // * CLASS & OBJECTS 🏎️
    class Car
    {
        public string $color;
        public string $model;

        // * Constructor runs when object is created
        public function __construct(string $color, string $model)
        {
            $this->color = $color;
            $this->model = $model;
        }

        // * Method to show car info
        public function displayInfo(): string
        {
            return "Car Model: $this->model, Color: $this->color";
        }
    }

    // * Create a Car object
    $myCar = new Car("Red", "Toyota");
    echo $myCar->displayInfo(); // Output: Car Model: Toyota, Color: Red

    // * Change property
    $myCar->color = "Blue";
    echo "<br>" . $myCar->displayInfo(); // Output: Car Model: Toyota, Color: Blue
    echo "<br>";

    // * Constructor Property Promotion (PHP 8+) 🚀
    class Account
    {
        public function __construct(public string $name, public float $balance) {}

        public function display_account_info(): string
        {
            return "Account Holder: $this->name, Balance: $this->balance";
        }

        public function deposit(float $amount): void
        {
            $this->balance += $amount;
        }
    }

    $my_account = new Account("John Wick", 6969);
    echo $my_account->display_account_info();
    echo "<br>";
    $my_account->deposit(1);
    echo $my_account->display_account_info();
    echo "<br>";
    var_dump($my_account);

    // ! ENCAPSULATION 🔒
    // * Hide details inside the class
    class User
    {
        public function __construct(private string $name, private string $password) {}

        public function display_user_info(): string
        {
            return "<br>Name: $this->name & Password is private.";
        }

        public function getUsername(): string
        {
            return $this->name;
        }

        public function setUsername(string $username): void
        {
            $this->name = $username;
        }
    }

    $user = new User("John Doe", "12345");
    echo $user->display_user_info();
    echo "<br>" . $user->getUsername();
    echo "<br>";
    $user->setUsername("Jassy");
    var_dump($user);
    echo "<br>";

    // ! INHERITANCE 🐾
    // * Child class gets stuff from parent class
    class Animal
    {
        public function __construct(public string $name) {}

        public function makeSound(): string
        {
            return "Some generic animal sound";
        }
    }

    $animal = new Animal("Cat");
    echo $animal->makeSound();
    echo "<br>";

    // * Dog is a type of Animal
    class Dog extends Animal
    {
        public function makeSound(): string
        {
            return "Woof! Woof!";
        }
    }

    $dog = new Dog("Doggy");
    echo $dog->makeSound();
    echo "<br>";

    // ! PROTECTED MODIFIER 🛡️
    // * Protected = only class & subclasses can use
    class Vehicle
    {
        protected string $type;

        public function __construct(string $type)
        {
            $this->type = $type;
        }

        protected function getType(): string
        {
            return $this->type;
        }
    }

    class Bike extends Vehicle
    {
        public function displayType(): string
        {
            return "This is a " . $this->getType();
        }
    }

    $bike = new Bike("Mountain Bike");
    echo $bike->displayType();
    echo "<br>";

    // ! METHOD OVERRIDING 🔁
    // * Child class can change parent method
    class ParentClass
    {
        public function greet(): string
        {
            return "Hello from Parent Class!";
        }
    }

    class ChildClass extends ParentClass
    {
        public function greet(): string
        {
            return "Hello from Child Class!";
        }
    }

    $child = new ChildClass;
    echo $child->greet();
    echo "<br>";

    // ! ABSTRACT CLASSES 🏗️
    // * Can't make object from abstract class
    // * Child must write abstract methods
    abstract class AbstractClass
    {
        abstract public function abstractMethod();

        public function concreteMethod(): string
        {
            return "This is a concrete method.";
        }
    }

    class ConcreteClass extends AbstractClass
    {
        public function abstractMethod(): string
        {
            return "This is an implementation of the abstract method.";
        }
    }

    $concrete = new ConcreteClass;
    echo $concrete->abstractMethod();
    echo "<br>" . $concrete->concreteMethod();
    echo "<br>";

    // ! INTERFACES 📋
    // * Interface = rules for classes
    interface AnimalInterface
    {
        public function makeSound(): string;
    }

    class Cat implements AnimalInterface
    {
        public function makeSound(): string
        {
            return "Meow!";
        }
    }

    $cat = new Cat();
    echo $cat->makeSound();
    echo "<br>";

    // ! POLYMORPHISM 🦜
    // * Many classes, same interface
    class Bird implements AnimalInterface
    {
        public function makeSound(): string
        {
            return "Chirp!";
        }
    }

    $bird = new Bird();
    echo $bird->makeSound();
    echo "<br>";

    // ! ANONYMOUS CLASSES 🕵️‍♂️
    // * Class with no name, made on the fly
    $anonymousAnimal = new class implements AnimalInterface {
        public function makeSound(): string
        {
            return "Anonymous sound!";
        }
    };
    echo $anonymousAnimal->makeSound();
    echo "<br>";

    // ! EXCEPTIONS ⚠️
    // * Handle errors with try/catch
    class CustomException extends Exception {}
    function riskyFunction(): void
    {
        throw new CustomException("Something went wrong!");
    }
    try {
        riskyFunction();
    } catch (CustomException $e) {
        echo "Caught exception: " . $e->getMessage();
    } finally {
        echo "<br>Finally block executed.";
    }
    echo "<br>";

    // ! DATE/TIME CLASS 🕒
    // * Work with dates and times
    $date = new DateTime();
    echo "Current Date: " . $date->format('d-m-Y') . "<br>";
    $date->modify('+1 month');
    echo $date->format('d-m-y') . '<br>';

    // TIME
    $time = new DateTime();
    echo "Current Time: " . $time->format('H:i:s') . "<br>";

    // Time zone
    $timeZone = new DateTimeZone('Asia/Kolkata');
    $time->setTimezone($timeZone);
    echo "Time in India: " . $time->format('H:i:s') . "<br>";


    ?>
</body>

</html>