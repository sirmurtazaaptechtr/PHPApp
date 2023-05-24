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
        class teacher{}
        class student {
            // Properties
            public $id;
            public $firstName;
            public $lastName;
            public $dob;
            public $email;            
            // Methods
            function __construct($STUDENTID){
                $this->id = $STUDENTID;                
            }
            function setData($FIRSTNAME,$LASTNAME,$DATEOFBIRTH,$EMAILADDRESS){
                $this->firstName = $FIRSTNAME;
                $this->lastName = $LASTNAME;                
                $this->dob = $DATEOFBIRTH;
                $this->email = $EMAILADDRESS;
            }
            function getID (){
                return $this->id;                
            }
            function getName (){
                return $this->firstName . " " . $this->lastName;                
            }
            function getDOB(){
                return $this->dob;
            }
            function getEmail(){
                return $this->email;
            }
            function showBio(){
                echo "<h4>" . "ID: " .  $this->getID() . "</h4>";
                echo "<h4>" . "Full Name: " . $this->getName() . "</h4>";
                echo "<h4>" . "Date of Birth: " . $this->getDOB() . "</h4>";
                echo "<h4>" . "email: " .  $this->getEmail() . "</h4>";                
            }
            function __destruct(){
                echo "$this->id is created";
            }
        }
        // Objects
        $student1 = new student("Student0001");
        $student2 = new student("Student0002");
        $student1->setData("Ammar","Ahmed","4-Nov-2004","ammar111@gmail.com");
        $student2->setData("Shuja","Rehman","26-Feb-1999","shuja9642@gmail.com");
        // echo $student1->getID();
        // echo $student1->getName();
        // echo $student1->getDOB();
        // echo $student1->getEmail();
        echo $student1->showBio();      
        echo $student2->showBio();
        
        $student2->firstName = "Syed Shuja";
        echo $student1->showBio();
        echo $student2->showBio();      
        $t1 = new teacher();
        var_dump($t1 instanceof student);
        var_dump($t1 instanceof teacher);
    ?>
</body>
</html>