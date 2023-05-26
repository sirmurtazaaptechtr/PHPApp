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
            function showBio(){
                echo "<h4>" . "ID: " .  $this->getID() . "</h4>";
                echo "<h4>" . "Full Name: " . $this->getName() . "</h4>";
                echo "<h4>" . "Date of Birth: " . $this->getDOB() . "</h4>";
                echo "<h4>" . "email: " .  $this->getEmail() . "</h4>";                
            }
        }
        // Objects
        $student1 = new student();
        $student2 = new student();
        $student1->setData("Student0001","Ammar","Ahmed","4-Nov-2004","ammar111@gmail.com");
        $student2->setData("Student0002","Shuja","Rehman","26-Feb-1999","shuja9642@gmail.com");
        // echo $student1->getID();
        // echo $student1->getName();
        // echo $student1->getDOB();
        // echo $student1->getEmail();
        echo $student1->showBio();      
        echo $student2->showBio();
        
        $student2->firstName = "Syed Shuja";
        echo $student2->showBio();      
        echo $student1->showBio();
        $t1 = new teacher();
        var_dump($t1 instanceof student);
        var_dump($t1 instanceof teacher);
    ?>
</body>
</html>