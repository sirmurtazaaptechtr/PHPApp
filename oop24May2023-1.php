<?php
    class employee {
        private $id;
        private $name;
        private $dob;
        private $email;

        public function __construct($ID)        
        {
            $this->id = $ID;                        
        }
        public function setName($Name)
        {
            $this->name = $Name;
        }
        public function setDOB($DOB)
        {
            $this->dob = $DOB;
        }
        public function setEmail($Email)
        {
            $this->email = $Email;
        }
        public function getID()
        {
            return $this->id;
        }
        public function getName()
        {
            return $this->name;
        }
        public function getDOB()
        {
            return $this->dob;
        }
        public function getEmail()
        {
            return $this->email;
        }
        protected function dispInfo()
        {
            echo "<p><b>ID : </b>$this->id<br/><b>Name : </b>$this->name<br/><b>DOB : </b>$this->dob<br/><b>Email : </b>$this->email<br/></p>";
        }
    }
    class fullTimeEmployee extends employee{
        private $monthlysalary;
        public function setMonthlySalary($MonthlySalary)
        {
            $this->monthlysalary = $MonthlySalary;
        }
        public function getMonthlySalary()
        {
            return $this->monthlysalary;
        }
        public function showInfo(){
            $this->dispInfo();
            echo "<p><b>MonthlySalary : </b>$this->monthlysalary</p>";
            echo "<hr/>";
        }
    }
    class partTimeEmployee extends employee{
        private $hourlyrate;
        public function setHourlyRate($HourlyRate)
        {
            $this->hourlyrate = $HourlyRate;
        }
        public function getHourlyRate()
        {
            return $this->hourlyrate;
        }
        public function showInfo(){
            $this->dispInfo();
            echo "<p><b>HourlyRate : </b>$this->hourlyrate</p>";
            echo "<hr/>";
        }
    }

    $emp1 = new fullTimeEmployee("Student000001");
    $emp1->setMonthlySalary(120_000);
    // echo $emp1->getMonthlySalary();

    $emp1->setName("Shuja ur Rehman");
    $emp1->setEmail("shuja9642@gmail.com");
    $emp1->setDOB("1999-02-26");
    $emp1->showInfo();

    $emp2 = new partTimeEmployee("Student000002");
    $emp2->setHourlyRate(200);
    $emp2->setName("Sakina Qasim");
    $emp2->setEmail("sakinaqasim99@gmail.com");
    $emp2->setDOB("2003-01-18");
    $emp2->showInfo();
    
?>