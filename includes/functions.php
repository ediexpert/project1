<?php
// USE mysqli on this page
// mysqli variable is $dbc

global $dbc;


function login_entry($id,$ip){
	global $dbc;
	$qry = "INSERT INTO login_details (uid,ip) VALUES ('$id','$ip')";
	if($dbc->query($qry)){
		return true;
	}else{
		return false;
	}
}


// 
function check_attempt($uid){
/**
 * This function will return yes or no check weather user has made any attempt or not
 * 
 * @author Imran M Bajwa <bajwa.imran@live.com>
 * @return yes or no
 */ 
	global $dbc;
	$sql = $dbc->query("select * from test_log where uid = '$uid' ");
	if($sql->num_rows > 0){
		return "yes";
	} 
	else {
		start_test($uid);
		return "no";
	}
}

// This function check weather whole topics attempted or not and return yes or no
function check_alltopicsattempted($uid){
	/**
 * This function check weather whole topics attempted or not and return yes or no
 * 
 * @author Imran M Bajwa <bajwa.imran@live.com>
 * @return yes or no
 */ 
	global $dbc;


	$sql = $dbc->query("select * FROM tests, test_log, user WHERE user.id='$uid' AND 
		user.test_id = tests.test_id AND user.id = test_log.uid ORDER BY test_log.t_time DESC LIMIT 1");
	if ( $sql->num_rows == 0) return "no";
	$r = $sql->fetch_assoc();	
	 $atopics = explode(",", $r['topics']);
	$ltad = $r['tid'];
	$pos = sizeof($atopics)-1;
	if($pos == array_search($r['tid'],$atopics)){
		return "yes";
	}
	// if( $ltad == $atopics[sizeof($atopics)-1] )
		
	else{
		return "no";
	}
		
}

//
function get_next_topic($uid){
	/**
 * This function will return array of next topic 
 * 
 * @author Imran M Bajwa <bajwa.imran@live.com>
 * @return array with questions
 */ 
	global $dbc;
	$sql = $dbc->query("select * from test_log where uid = '$uid' ORDER BY t_time DESC LIMIT 1");
	$r1 = $sql->fetch_assoc();


	$sql2 = $dbc->query("select * from user a, tests b  WHERE  a.id= '$uid' AND a.test_id = b.test_id");
	$r2 = $sql2->fetch_assoc();


	$tarray = explode(",", $r2['topics']);

	if($sql->num_rows == 0){
		$tid = current($tarray);
	}else{
		if($r1['topicid'] == end($tarray)){
			return false;
		}
		$pos = array_search($r1['topicid'],$tarray);
		if($pos < sizeof($tarray)){
			$tid = $tarray[$pos+1];
		}else{ 
			return false;
		}
		
	}
	// $sql3 = $dbc->query("select * from questions WHERE topic_id = '$tid' AND ques_status=1 ");
	// $r = $sql3->fetch_array();
	return $tid;
}

function getquestions_by_topicid($tid){
	/**
	* This function is get all the question for perticular topic
	*
	* @return array of all questions related to topic id
	* @author Imran M Bajwa <bajwa.imran@live.com>
	*/

	global $dbc;
	$sql = $dbc->query("select * from questions WHERE topic_id = '$tid' AND ques_status=1 ORDER BY RAND()");
	if($sql->num_rows == 0 ) return false;
	while($row = $sql->fetch_row()) {
	  $rows[]=$row;
	}
	return $rows;
}

function get_qoptions($qid){
	/**
	*This functions will return array with options related to question
	* take question ID as argument
	* @return question options array
	* @author Imran M Bajwa <bajwa.imran@live.com
	*/

	global $dbc;
	$sql = $dbc->query("select * from questionoptions where qid = '$qid' ");
	// $rows[]="";
	while($row = $sql->fetch_array()){
		$rows[] = $row;
	}
	return $rows;
}




function update_testlog($uid,$tid,$ip){
	/**
	* This function will update test_log database or entry an attempt of perticular topic
	* once this entry is done, user will not be able to attempt this topic again
	* @return true or false
	* @author Imran M Bajwa <bajwa.imran@live.com
	*/

	global $dbc;
	if( $sql = $dbc->query("insert into test_log SET uid ='$uid', topicid='$tid',ip='$ip'") ){
		return true;
	}else{
		return false;
	}

}


function get_topic($tid){
	global $dbc;
	$sql = $dbc->query("select topic from topic where topic_id='$tid'");
	if($sql->num_rows > 0){
		$r = $sql->fetch_assoc();
		return $r['topic'];
	}
}

function get_optid_points($oid){
	global $dbc;
	$sql = $dbc->query("select opoints from questionoptions where opt_id='$oid'");
	if($sql->num_rows > 0){
		$r = $sql->fetch_assoc();
		return $r['opoints'];
	}
}

function start_test($uid){
	global $dbc;
	$dnt =  date('Y-m-d H:i:s', time());
	if($sql = $dbc->query("INSERT INTO user_teststats SET uid = '$uid', stime ='$dnt' ")){
		return true;
	}else{
		return false;
	}

}



function get_user_testid($uid){
	global $dbc;
	$sql = $dbc->query("select utid from user_teststats where uid='$uid'");
	if($sql->num_rows > 0){
		$r = $sql->fetch_assoc();
		return $r['utid'];
	}
}


function get_points_by_answer($ans,$qid){
	global $dbc;
	// $sql = $dbc->query("select * from questions a, questionoptions b WHERE a.qid ='$qid' AND b.option_txt LIKE %'$ans'% AND a.qid=b.qid");
	$sql = $dbc->query("select opoints from questionoptions where qid='$qid' AND option_txt LIKE '$ans' " );
	if($sql->num_rows >0){
		$r = $sql->fetch_assoc();
		return $r['opoints'];
	}else{
		return 0;
	}	
}

function get_points_by_mt_answer($ans,$qid){
	global $dbc;
	// $sql = $dbc->query("select * from questions a, questionoptions b WHERE a.qid ='$qid' AND b.option_txt LIKE %'$ans'% AND a.qid=b.qid");
	$sql = $dbc->query("SELECT mt_points FROM mt_ques WHERE mt_ans = '$ans' AND mtqid='$qid' " );
	if($sql->num_rows >0){
		$r = $sql->fetch_assoc();
		return $r['mt_points'];
	}else{
		return 0;
	}	
}


// function islast_topic($uid,$tid){
// 	global $dbc;
// 	$uid=1;$tid=8;
// 	$q = $dbc->query("select * from tests a, user b where a.test_id=b.test_id and b.id='$uid' ");
//     if($q->num_rows > 0){
//         $r= $q->fetch_assoc();
//         $t = explode(",", $r['topics']) ;
//         echo sizeof($t);
//         echo $t[sizeof($t)-1];
//         // $tid = "8";
//         if($tid === $t[sizeof($t)-1]){
//             return true;
//         }else{
//             return false;
//         }
//     }
// }





function get_username($uid){
	global $dbc;
	$q = $dbc->query("select name from user where id='$uid' ");
	$r = $q->fetch_assoc();
	return $r['name'];
}


function getTopicTimeLimit($topicId){
	global $dbc;
	$q = $dbc->query("select topic_timelimit from topic where topic_id='$topicId' ");
	$r = $q->fetch_assoc();
	$secs = $r['topic_timelimit'] * 60;
	return $secs;
}



function topicTestGiven($userId,$topic){
	global $dbc;
	$q = $dbc->query("select * from test_log where uid='$userId' and topicid='$topic' ");
	if($q->num_rows >0)
		return "Completed";
	else
		return "Pending";
}
?>