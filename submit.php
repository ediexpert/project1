<?php
session_start();
 include('mysqli_connect.php');
include('includes/functions.php');
?><?php 

if( !isset($_SESSION['id']) ){
?><script type="text/javascript">window.location.href="report";</script><?php    
}
?>
<script type="text/javascript">
// window.onbeforeunload = function() {
//   return "Data will be lost if you leave / Refresh the page and this topic will not appear again, are you sure?";
// };
// 
</script>
<?php 
$qids = $oids =$pts ="";
$tp=0;
$x=0;
if(isset($_REQUEST['submit_test'])){
foreach($_REQUEST['qid'] as $k){
    //echo "question type=";
    $qtp = "qtype".$k;
     $_REQUEST[$qtp];

    //echo "Question id:";
    $qid[]= $k;
    //echo " answer option id ";
    $ans = "ans" .$k;
    if(isset($_REQUEST[$ans])) {
        if( $_REQUEST[$qtp] == "2"){
            $oid[]=$_REQUEST[$ans];
        $tp +=get_points_by_answer($_REQUEST[$ans],$k);
        $p[] = get_points_by_answer($_REQUEST[$ans],$k);
        }else{
            $oid[]=$_REQUEST[$ans];
            //echo "Points: ";
            $tp += get_optid_points($_REQUEST[$ans]);
            $p[]=get_optid_points($_REQUEST[$ans]);
        }
}else{
    $oid[]=0;
    $p[]=0;
}
   //echo "<br>";

}

foreach ($_REQUEST['sec'] as $key ) {
    $sec[] = $key;
}

$qids = implode (", ", $qid);
$oids = implode(",", $oid);
$pts = implode(",", $p);
$tx = implode(",", $sec);
$topicid = $_REQUEST['topic'];

$uid = $_SESSION['id'];
//$secs = 
//$utid = get_utid($_SESSION['id']);// get utid of current user

$dnt =  date('Y-m-d H:i:s', time());

if($dbc->query("insert into result SET uid = '$uid',total_score='$tp',topicid='$topicid',ind_sec='$tx', attempted_ques= '$qids', attempted_ans='$oids',ind_points='$pts' ")){
    // start of checking is last topic 
    $q = $dbc->query("select * from tests a, user b where a.test_id=b.test_id and b.id='$uid' ");
    if($q->num_rows > 0){
        $r= $q->fetch_assoc();
        $t = explode(",", $r['topics']) ;
        if($topicid == $t[sizeof($t)-1]){
            // $dbc->query("update user set test_given=1 where id='$uid' ");
        }
    }
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
}?>