<?php

//Create the following variables 
    abstract class UniversityStudent {
        public $name;
        private $birth_year;
        private $registration_year;
        private $registration_course;
    
    //Create a constructor
    public function _construct($name,$birth_year, $registration_year, $registration_course){
        $this->name = $name;
        $this->birth_year = $birth_year;
        $this->registration_year = $registration_year;
        $this->registration_course = $registration_course;
    }
    //Create a constructor
    public function new_student_detail($name,$birth_year, $registration_year, $registration_course){
        $this->name = $name;
        $this->birth_year = $birth_year;
        $this->registration_year = $registration_year;
        $this->registration_course = $registration_course;
    }
    
    //Create the appropriate Getter and setter methods for each property
    public function get_name(){
        return $this->name;
    }
    public function set_name($name){
        $this->name = $name;
    }
    
    public function get_birth_year(){
        return $this->birth_year;
    }
    public function set_birth_year($birth_year){
        $this->birth_year = $birth_year;
    }
    
    public function get_registration_year(){
        return $this->registration_year;
    }
    public function set_registration_year($registration_year){
        $this->registration_year = $registration_year;
    }
    
    public function get_registration_course(){
        return $this->registration_course;
    }
    public function set_registration_course($registration_course){
        $this->registration_course = $registration_course;
    }
    
    //Create an abstract method
    abstract public function get_avg_grade() : string;
    
    abstract public function get_class() : string;
    
}
    //Define a mathematics student class which extends to university student
    class MathematicsStudent extends UniversityStudent{
    
        //Declare variables
        private $avg_grade;
        private $class_grade;

        //Create a constructor
    public function __construct($name,$birth_year, $registration_year, $registration_course, $avg_grade, $class_grade){
        //Implement the abstract method from its parent
        parent:: _construct($name,$birth_year, $registration_year, $registration_course);
        $this->avg_grade = $avg_grade;
        $this->class_grade = $class_grade;
    }
    
    //Create a constructor
    public function mathematics_student_detail($name,$birth_year, $registration_year, $registration_course, $avg_grade, $class_grade){
        $this->name = $name;
        $this->birth_year = $birth_year;
        $this->registration_year = $registration_year;
        $this->registration_course = $registration_course;
        $this->avg_grade = $avg_grade;
        $this->class_grade = $class_grade;
    }
    
    //Create the appropriate getter and setter methods
    public function get_avg_grade(): string
    {return "The Student' average grade is $this->avg_grade";
    }
    
    public function set_avg_grades($avg_grade){
        $this->avg_grade = $avg_grade;
    }
    
    public function get_class(): string
    {return "The Student' Class is $this->class_grade";
    }
    
    public function set_class($class_grade){
        $this->class_grade = $class_grade;
    }
    
    
}