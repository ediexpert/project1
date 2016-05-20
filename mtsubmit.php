<?php
session_start();
 include('mysqli_connect.php');
include('includes/functions.php');
?><?php 

if( !isset($_SESSION['id']) ){
?><script type="text/javascript">window.location.href="report";</script><?php    
}
?>
<?php 
// For multi Tasking question by default topic id is 99
//$qids = $oids =$pts ="";
$tp=0;
$x=0;
if(isset($_REQUEST['submit_test'])){
foreach($_REQUEST['qid'] as $k){
    echo $k;
    //echo "question type=";
    //echo $qtp = "qtype".$k;
     //echo $_REQUEST[$qtp];
    echo '->';
    //echo "Question id:";
    echo $qid[]= $k;
    //echo " answer option id ";
    echo '->';
    echo $ans = "ans" .$k;
    echo '->';
    if(isset($_REQUEST[$ans])) {
        echo $oid[]=$_REQUEST[$ans];
        echo $tp +=get_points_by_mt_answer($_REQUEST[$ans],$k);
        echo $p[] = get_points_by_mt_answer($_REQUEST[$ans],$k);
        echo $sec[]=5;
        echo "<br>";
        /*
        if( $_REQUEST[$qtp] == "2"){
            //$oid[]=$_REQUEST[$ans];
        $tp +=get_points_by_answer($_REQUEST[$ans],$k);
        $p[] = get_points_by_answer($_REQUEST[$ans],$k);
        }else{
            $oid[]=$_REQUEST[$ans];
            //echo "Points: ";
            $tp += get_optid_points($_REQUEST[$ans]);
            $p[]=get_optid_points($_REQUEST[$ans]);
        }*/
}else{
    $oid[]=0;
    $p[]=0;
}
   //echo "<br>";

}



echo $qids = implode (", ", $qid);
echo $oids = implode(",", $oid);
echo $pts = implode(",", $p);
echo $tx = implode(",", $sec);
echo $topicid = 99;

echo $uid = $_SESSION['id'];
//$secs = 
//$utid = get_utid($_SESSION['id']);// get utid of current user
/*
$dnt =  date('Y-m-d H:i:s', time());

if($dbc->query("insert into result SET uid = '$uid',total_score='$tp',topicid='$topicid',ind_sec='$tx', attempted_ques= '$qids', attempted_ans='$oids',ind_points='$pts' ")){
    // start of checking is last topic 
    // $q = $dbc->query("select * from tests a, user b where a.test_id=b.test_id and b.id='$uid' ");
    // if($q->num_rows > 0){
    //     $r= $q->fetch_assoc();
    //     $t = explode(",", $r['topics']) ;
    //     if($topicid == $t[sizeof($t)-1]){
    //         // $dbc->query("update user set test_given=1 where id='$uid' ");
    //     }
    // }
// end of checking is last topic


    ?><script type="text/javascript">window.location.href="report";</script><?php
}else{
    echo $dbc->error;
}

    //print_r($_REQUEST['ans']);
//     $i=0;
//     foreach($_REQUEST['qid'] as $k => $val){
//         echo $k;
//         $ans = "ans".$i;
//         echo sizeof( $_REQUEST[$ans]);// return # of answers
//         for($c=0;$c<sizeof($_REQUEST[$ans]);$c++){
//             echo $_REQUEST[$ans][$c]; // return first array element of array
//         }
        
//         echo $val;
//         echo "<br>";
//         $i++;
// }

*/
}?>