<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class greetings
    {
        const WELCOME_MESSAGE = "Welcome to my website.";
        const LEAVING_MESSAGE = "Thank you for visiting our website.";

        public function showGreetings()
        {
            echo "<p>" . self::WELCOME_MESSAGE . "</p>";
            echo "<p>" . self::LEAVING_MESSAGE . "</p>";
        }
    }
    abstract class ParentClass
    {
        abstract public function someMethod1();
        abstract public function someMethod2($name, $color);
        abstract public function someMethod3(): string;
    }

    abstract class ChildClass extends ParentClass
    {
        public function someMethod1()
        {
        }
        public function someMethod2($name, $color)
        {
        }
        public function someMethod3(): string
        {
            return " ";
        }
    }
    // Parent class
    abstract class Car
    {
        public $name;
        public function __construct($name)
        {
            $this->name = $name;
        }
        abstract public function intro(): string;
    }

    // Child classes
    class Audi extends Car
    {
        public function intro(): string
        {
            return "Choose German quality! I'm an $this->name!";
        }
    }

    class Volvo extends Car
    {
        public function intro(): string
        {
            return "Proud to be Swedish! I'm a $this->name!";
        }
    }

    class Citroen extends Car
    {
        public function intro(): string
        {
            return "French extravagance! I'm a $this->name!";
        }
    }

    // Create objects from the child classes
    $audi = new audi("Audi");
    echo $audi->intro();
    echo "<br>";

    $volvo = new volvo("Volvo");
    echo $volvo->intro();
    echo "<br>";

    $citroen = new citroen("Citroen");
    echo $citroen->intro();
    
    $greet = new greetings();
    $greet->showGreetings();

    // echo "<p>" . greetings::WELCOME_MESSAGE . "</p>";
    // echo "<p>" . greetings::LEAVING_MESSAGE . "</p>";
    ?>
</body>

</html>