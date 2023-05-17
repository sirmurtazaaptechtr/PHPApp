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
        class student {
            public $id;
            public $firstName;
            public $lastName;
            public $dob;
            public $email;
            
            function setData ($STUDENTID,$FIRSTNAME,$LASTNAME,$DATEOFBIRTH,$EMAILADDRESS){
                $this->id = $STUDENTID;
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
            function printData(){
                echo "<h4>" .  $this->getName() . "</h1>";
            }
        }
        $student1 = new student();
        $student1->setData("Student0001","Ammar","Ahmed","4-Nov-2004","ammar111@gmail.com");
        echo $student1->getID();
        echo $student1->getName();
        echo $student1->getDOB();
        echo $student1->getEmail();        
    ?>
</body>
</html>