<?php
#read-questions.php
$doc = new DOMDocument(); 
$doc->load( 'write.xml' ); 
   
$employees = $doc->getElementsByTagName( "question" ); 
// print_r($employees->length); // returns number of questions in XML file
$num_of_qns = $employees->length;

foreach($employees  as $employee){
	$names = $employee->getElementsByTagName( "type" ); 
	$name = $names->item(0)->nodeValue; 
   	echo $name;
	$ages= $employee->getElementsByTagName( "question_txt" ); 
	$age= $ages->item(0)->nodeValue; 
   	echo $age;
	$salaries = $employee->getElementsByTagName( "image" ); 
	$salary = $salaries->item(0)->nodeValue; 
	echo $salary;
}

