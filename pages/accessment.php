
        <div class="intro-text">
            <!-- <span class="name">SFA PILOT COMPASS TEST</span> -->
            <div style="float:left; ">
            Time left: <div id='timer' style="display:inline;"/>
            <script type="text/javascript">window.onload = CreateTimer("timer", <?php echo $seconds;?>);</script>
            </div>
        </div>



<?php 
 $r = get_next_topic($_SESSION['id']);
 if($qr =getquestions_by_topicid($r)){
$d=1;
echo "<div class='divs'>";
foreach ($qr as $key) {
echo "<div class='cls{$d}'>";
echo $key[3];
$or = get_qoptions($key[0]);
foreach ($or as $k) {
echo $k[2]."<input class='form-control' type='radio' name='ans' value='{$k[0]}'>";
}$d++;
echo "</div>";
}
echo "</div>";
}else{
echo "Nothing";
}
?>
<button id="next">Next</button>
                       
                        
                        



                            




<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript">
 $(document).ready(function(){
    $(".divs div").each(function(e) {
        if (e != 0)
            $(this).hide();
    });

    $("#next").click(function(){
        if ($(".divs div:visible").next().length != 0)
            $(".divs div:visible").next().show().prev().hide();
        else {
            $(".divs div:visible").hide();
            $(".divs div:first").show();
        }
        return false;
    });

    $("#prev").click(function(){
        if ($(".divs div:visible").prev().length != 0)
            $(".divs div:visible").prev().show().next().hide();
        else {
            $(".divs div:visible").hide();
            $(".divs div:last").show();
        }
        return false;
    });
});
 </script>