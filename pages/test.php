 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript">
 $(document).ready(function(){
    $(".divs div").each(function(e) {
        if (e != 0)
            $(this).hide();
    });

    $("#next").click(function(){
        if ($(".divs div:visible").next(".nxt").length != 0)
            $(".divs div:visible").next(".nxt").show().prev().hide();
        else {
            $(".divs div:visible").hide();
            $(".divs div:first").show();
            // $("#next").hide();
            // $(".divs").hide();
            // $("#finish").show();
        }
        return false;
    });
});
 </script>
 <script type="text/javascript">
var i=0;
function get_timeelapsed(){
var j = "time" + i;
document.getElementById(j).value = sec;
sec=0;
i++;
}

var sec =0;
setInterval(incrz, 1000);
function incrz(){
++sec;
// document.getElementById("time").innerHTML = sec;
}


    
</script>
<?php 
$uid = $_SESSION['id']; // setting Userid varibale of logged in user
$ip=$_SERVER['REMOTE_ADDR']; // getting ip address of remote client machine
//if($r =get_next_topic($uid)){
//update_testlog($uid,$r,$ip); 
?>
 

                <div class="col-lg-12">
                    <h4 style="text-align:left">Time Left: 1 hr 35 min 10 sec </h4>



<div class="divs">
    <div class="nxt"><div> </div>1 </div> 

    <div class="nxt"><div> </div>2</div>
    <div class="nxt"><div> </div>2</div>
    <div class="nxt">3</div>
    <div class="nxt"><div> </div>2</div>
    <div class="nxt">4</div> <!-- end of inner div -->
                </div><!-- end of div with class divs -->


<!-- repeating div start here -->

                    <div class="intro-text">

                        <h3>Question: How are you Feeling Today?</h3>
                    </div>
                    <div class="col-lg-6 text-left">
                        <fieldset>
                            <input type="checkbox" />
                            <label>
                                Good
                            </label>
                        </fieldset>
                        <fieldset>
                            <input type="checkbox"  />
                            <label>
                                Not Good
                            </label>
                        </fieldset>
                        <fieldset>
                            <input type="checkbox"  />
                            <label>
                                Don't Know
                            </label>
                        </fieldset>
                    </div>
                     <div class="col-lg-6"><img src="images/ex.gif" alt="Question related Media" />
                        <?php /*
                        <canvas id="myCanvas" width="300" height="300" style="border:1px solid #000000;"></canvas>
                            <script>
                              var canvas = document.getElementById('myCanvas');
                              var context = canvas.getContext('2d');
                            </script>
                        <script src="<?php echo base_url();?>/games/snake/snake_core.js"></script> */?>

                     </div>
                     <div class="col-lg-6 col-lg-offset-3">
                        <form action="" method="POST">
                        <fieldset>
                                <input type="submit" value="Save &amp; Next" class="btn btn-primary btn-lg"> 
                            </fieldset>
                        </form>
                    </div>
                        <!-- repeting div end here -->
                   





                <button id="next">hasjajk</button>

                </div>
        
    <?php 
//} else {
  //  include('pages/test_already_completed.php');
//}

?>