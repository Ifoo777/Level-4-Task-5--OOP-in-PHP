<?php
require './student.php';

//Declare variables
$name = $_POST['name'];
$birth_year = $_POST['birth_year'];
$registration_year = $_POST['registration_year'];
$registration_course = $_POST['registration_course'];
$avg_grade = $_POST['avg_grade'];
$avg_class = $_POST['avg_class'];

//Create a new instantiation of the object new student
$new_student = new MathematicsStudent($name,$birth_year,$registration_year,$registration_course,$avg_grade,$avg_class);

//Display the student properties in a form of a list in HTML
echo '<h1> Student Properties </h1>';
echo '<ul>';
echo '<li>Name: ' .$new_student->get_name(). '</li>';
echo '<li>Birthday: ' .$new_student->get_birth_year(). '</li>';
echo '<li>Registration Year: ' .$new_student->get_registration_year(). '</li>';
echo '<li>Registered course: ' .$new_student->get_registration_course(). '</li>';
echo '<li>Average grades: ' .$new_student->get_avg_grade(). '</li>';
echo '<li>Registered Class: ' .$new_student->get_class(). '</li>';
echo '</li></ul>';