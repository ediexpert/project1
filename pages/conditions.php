
<!--  <img class="img-responsive" src="logo/logo.png" alt=""> -->
<div class="intro-text">
<!-- <span class="name">SFA PILOT COMPASS TEST</span> -->
<!-- <h4 class="text-primary">Thank you.</h4> -->
<?php 
$topicId = (isset($_GET['test']))? $_GET['test'] : get_next_topic($_SESSION['id']);
// $topicId = (get_next_topic($_SESSION['id']) == $_GET['test']) ? $_GET['test'] : get_next_topic($_SESSION['id']);
// $topicId = get_next_topic($_SESSION['id']);
?>
<h3>Conditions for <?php echo get_topic($topicId);?> test</h3>
<div class="col-md-offset-2 col-md-10">
<h4>
<ul class="text-left">
<li>Need to follow all conditions.</li>
<li>All questions are compulsory</li>
<li> Once attempted cannot be reviewed so fill the exam carefully.</li>
<li>One topic can be accessed only once so please complete the topic test once started.</li>
<li>We can add all conditions here</li>
<br>

<form name ="mtformConditions" method="POST" action="accessment" onsubmit="checkUserAgreed(); return false;">
	<input type="hidden" name="testTopicId" value="<?=$topicId?>">
<input type="checkbox" required="" id="useragreed"> I read all terms and conditions
</ul>

</h4>
</div>

<input type="submit"  class="btn btn-lg btn-primary" value="Attemp Exam" >
</form>
</div>
<script type="text/javascript">
function checkUserAgreed(){
    if(document.getElementById("useragreed").checked==true){
        console.log("checked");
        document.getElementsByName("mtformConditions").submit();
    } else{
        console.log("not checked");
    }
}
</script>