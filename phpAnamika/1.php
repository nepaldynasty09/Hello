<?php
class Member{
    private $name;
    private $age;
    private $phone;
    private $address;
    private $salary;

    public function setMemberDetails($name, $age, $phone, $address, $salary){
        $this->name= $name;
        $this->age= $age;
        $this->phone= $phone;
        $this->address= $address;
        $this->salary= $salary;
    }
    public function printMemberDetails(){
        echo "name=".$this->name."<br>";
        echo "age=".$this->age."<br>";
        echo "phone=".$this->phone."<br>";
        echo "address=".$this->address."<br>";
        echo "salary=".$this->salary."<br>";
    }
}
class Employee extends Member{
    private $specialization;
    public function setSpecialization($specialization){
        $this->specialization= $specialization;
    }
    public function printSpecialization(){
        echo "spec=".$this->specialization."<br>";
    }
}
class Manager extends Member{
    private $department;
    public function setDepartment($department){
        $this->department= $department;
    }
    public function printDepartment(){
        echo "depart=".$this->department."<br>";
    }
}
$employee= new Employee();
$manager = new Manager();
$employee->setMemberDetails("Anamika", 21, 9810067921, "Arjundhara", 200,000);
$employee->setSpecialization("web development");
$manager->setDepartment("production");
$manager->printDepartment();
$employee->printSpecialization();
$employee->printMemberDetails();
?>