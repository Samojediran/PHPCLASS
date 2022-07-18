<?php
require_once "person.php"; 

class Student extends Person{
    public $fname = 'Johnson' ;
    // public $age = 25 ; 
    public $department = 'Physics';
    public $course = 'Mech Engr' ; 

    function __construct() {
        // echo "welcome to our school" ;

    $db = mysqli->connect("") ;
    }

    function addStudent($name, $age, $department, $course){
        echo "Student $this->fname added successfully" ."<br>" ;
    }

    function editStudent($name, $age, $department, $course){
        $newname = $this->name ;
        echo "Student $newname edited successfully" ."<br>" ;
    }

    function DeleteStudent($name, $age, $department, $course){
        echo "Student deleted successfully" ."<br>" ;
    }

    function selectStudent($name, $age, $department, $course){
        echo "Student selected successfully" ."<br>" ;
    }
}


$std = new Student();
// $std -> addStudent('','','','');
// $std -> editStudent('','','','');
// $std -> DeleteStudent('','','','');
// $std -> selectStudent('','','','');




?>