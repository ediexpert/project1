<script type="text/javascript">

window.onbeforeunload = function() {
    
  return "Have you finished your test?";
};
</script>
<div class="row">
    <div class="col-md-6">    	
        <!-- <param name="movie" value="games/dots/dots-ii.swf" />
        <embed src="games/dots/dots-ii.swf"  height="450">
 -->
<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#ve rsion=6,0,0,0"
WIDTH="100%" HEIGHT="100%" id="2008" ALIGN="">
<PARAM NAME=movie VALUE="games/dots/dots-ii.swf"> 
    <PARAM NAME=loop VALUE=false> 
        <PARAM NAME=menu VALUE=false> 
            <PARAM NAME=quality VALUE=best> 
                <PARAM NAME=salign VALUE=LB> 
                    <PARAM NAME=bgcolor VALUE=#FFFFFF> 
                        <EMBED src="games/dots/dots-ii.swf" loop=false menu=false quality=best salign=LB bgcolor=#FFFFFF WIDTH="100%" HEIGHT="450" NAME="2008e" ALIGN=""
TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer"></EMBED>
</OBJECT>


    </div>
    <div class="col-md-6">
    	<form action="mtsubmit" method="post">
            <input type="hidden" name="submit_test" value="99">
<?php 
$uid = $_SESSION['id']; // setting Userid varibale of logged in user
$ip=$_SERVER['REMOTE_ADDR'];
$r =get_next_topic($uid);
echo $secs = getTopicTimeLimit($r);
$count = 5000;
$q = $dbc->query("select * from mt_ques WHERE mt_status=1");
$num = $q->num_rows;
if($num==0) echo "Nothing to show";
else{
$i=1;
while($r = $q->fetch_array()){
echo $ans = "ans".$r["mtqid"];
?>

        <div class="row" id="id<?php echo $i;?>"> 
            <input type='hidden' name='qid[]' value='<?=$r["mtqid"]?>'>
        	<div class="col-md-12 text-center"><h2><?php echo $r['mt_ques'];?></h2></div>
        	<div class="col-md-10 col-md-offset-2 text-center"> Answer <input type='text' name='<?=$ans?>' class='form-control'></div>
            <br><br>

        </div>


<?php
$i++;
}
}
?>
</form>
<button class="btn-primary btn-lg" id="nxt" style="display:none">Next</button>

    </div>


</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript">

// this will hide all divs only show first
$(document).ready(function(){
	for(var j=1; j <=<?php echo $num;?>;  j++){
		// if(j>1) 
			$('#id'+j).hide();
	}
});

// automatically hide and show div function
var i=1;
 $('#nxt').click(function(){
 	if(i< <?php echo $num;?>){
 		$('#id'+i).hide();
	 	i++;
	 	$('#id'+i).show();
 	}else{
 		$('form').submit();
 	}
 	
 });


//  $(document).ready(function() {
//   setTimeout(function() {
//     $("#nxt").trigger('click');
//   }, 5000);
// });

function generateclick(){

	$("#nxt").trigger('click');
}

 

var t=4;

 function countdown(){
 	if(i<= <?php echo $num;?>){
 	$('#timer').text(t);
 	t--;
 	if(t<1) t=5;
 }
 }
 

 	setInterval(countdown,1000);
	setInterval(generateclick, <?php echo $count;?>);


//  $(function(){  // document.ready function...
//    setTimeout(function(){
//       $('form').submit();
//     },10000);
// });

 </script>