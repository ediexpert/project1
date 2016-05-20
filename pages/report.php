<h1>Test Reports</h2>
<h3 class='text-primary'>Welcome to Stockholm Flight Academy Online Accessment.</h3><br>
<?php /*	<table class="table table-bordered">
		<tr>
			<th class="text-center">#</th>
			<th class="text-center">Section</th>
			<th class="text-center">Status</th>
		</tr>


		<tbody>
			<?php 
			$i=1;
			$uid = $_SESSION['id'];
			$q = $dbc->query("select * from test_log WHERE uid='$uid' ");
			if($q->num_rows >0){
				while($r = $q->fetch_array()){
					echo '<tr><td>'.$i.'</td><td>' . get_topic($r['topicid']) .'</td><td class="text-intro"> 
Completed &nbsp;<span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>';
$i++;
				}
				
			}else{
				echo "<h2>Test has not initiated yet</h2>";
			}






			?>
		</tbody>
	</table>
*/?>
<table class="table table-bordered">
<tr>
<!-- <th class="text-center">#</th> -->
<th class="text-center">Section</th>
<th class="text-center">Status</th>
</tr>
<tbody>
<?php 
$check=0;
$uid = $_SESSION['id'];
$q = $dbc->query("select * from user u, tests t where u.id='$uid' and t.test_id=u.test_id");
$r = $q->fetch_assoc();
$topics = explode(",", $r['topics']);
foreach ($topics as $topic) {
echo '<tr>';
// echo ;
// echo '<td>' . $topic . '</td>';
echo '<td>';
echo get_topic($topic);
echo '</td><td>';
if(topicTestGiven($uid,$topic)=="Pending"){
	echo '<button class="btn-primary" onclick=\'window.location.href="conditions?test='.$topic.'"\'>Start Test</button>'; //echo '<button class="btn-primary" onclick="window.open(\'conditions\',\'_blank\',\'title=yes,location=no,fullscreen=yes,toolbar=no,location=no,resizable=no,status=no\');">Start Test</button>';
	++$check;
}
	
else
	echo 'Completed &nbsp;<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>';
echo '</td></tr>';
}
if($r['multiTaskingTest'] == 1){
	++$check;
echo '<tr><td>Multi Tasking Test</td><td><button class="btn-primary" onclick=\'window.location.href="multitasker-master"\'>Start Test</button></td></tr>';
}
?>
</tbody>
</table>	
<?php

if($check== 0) {
	$dbc->query("update user set test_given=1 where id='$uid' "); 
	?><script type="text/javascript">window.location.href="status";</script><?php
}