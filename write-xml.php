<?php 
#write-xml.php
$questions = array();
include 'mysqli_connect.php';
$q=$dbc->query('select * from questions WHERE topic_id=1 ORDER BY RAND()');
while($r=$q->fetch_array()){
	 $questions[] = array(
	 	'type' => $r['ques_type'], 
	 	'question_txt' => $r['question'],
	 	'image' => $r['ques_img']
	 	);
}

$doc = new DOMDocument(); 
  $doc->formatOutput = true; 
   
  $r = $doc->createElement( "questions" ); 
  $doc->appendChild( $r ); 
   
  foreach( $questions as $employee ) 
  { 
  $b = $doc->createElement( "question" ); 
   
  $name = $doc->createElement( "type" ); 
  $name->appendChild( 
  $doc->createTextNode( $employee['type'] ) 
  ); 
  $b->appendChild( $name ); 
   
  $age = $doc->createElement( "question_txt" ); 
  $age->appendChild( 
  $doc->createTextNode( $employee['question_txt'] ) 
  ); 
  $b->appendChild( $age ); 
   
  $salary = $doc->createElement( "image" ); 
  $salary->appendChild( 
  $doc->createTextNode( $employee['image'] ) 
  ); 
  $b->appendChild( $salary ); 
   
  $r->appendChild( $b ); 
  } 
   
  echo $doc->saveXML(); 
  $doc->save("write.xml");


//reading XML file
$doc = new DOMDocument(); 
$doc->load( 'write.xml' ); 
   
$employees = $doc->getElementsByTagName( "question" ); 
echo 'Size of Array is : ' . sizeof($employees);
foreach( $employees as $employee ) 
{ 
  $names = $employee->getElementsByTagName( "type" ); 
  $name = $names->item(0)->nodeValue; 
   
  $ages= $employee->getElementsByTagName( "question_txt" ); 
  $age= $ages->item(0)->nodeValue; 
   
  $salaries = $employee->getElementsByTagName( "image" ); 
  $salary = $salaries->item(0)->nodeValue; 
   
  echo "<b>$name - $age - $salary\n</b><br>"; 
  } 
?>