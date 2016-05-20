
                     <?php if(validation_errors()){ 
                        ?>
                        <div class="alert alert-danger">
                      <?php echo validation_errors(); ?>
                     </div>
                     <?php } ?>

<?php 
if($resultstatus){ echo "<div class='alert alert-success'>".$resultstatus."</div>"; }
 ?> 

<div class="row" style="margin-top:10px;">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php if($title){ echo $title; } ?>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                   <form method="post" action="<?php echo site_url('user_data/insert_user');?>">

                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" type="text" name="username"  autocomplete="off">
										 </div>
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input class="form-control" type="text" name="first_name"  autocomplete="off">
										 </div>
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input class="form-control" type="text" name="last_name"  autocomplete="off">
										 </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="text" name="user_email"  autocomplete="off">
										 </div>
<?php  // PAssword generating script
$alpha = "abcdefghijklmnopqrstuvwxyz";
$alpha_upper = strtoupper($alpha);
$numeric = "0123456789";
$special = ".-+=_,!@$#*%<>[]{}";
$chars = "";
 
if (isset($_POST['length'])){
    // if you want a form like above
    if (isset($_POST['alpha']) && $_POST['alpha'] == 'on')
        $chars .= $alpha;
     
    if (isset($_POST['alpha_upper']) && $_POST['alpha_upper'] == 'on')
        $chars .= $alpha_upper;
     
    if (isset($_POST['numeric']) && $_POST['numeric'] == 'on')
        $chars .= $numeric;
     
    if (isset($_POST['special']) && $_POST['special'] == 'on')
        $chars .= $special;
     
    $length = $_POST['length'];
}else{
    // default [a-zA-Z0-9]{9}
    $chars = $alpha . $alpha_upper . $numeric;
    $length = 9;
}
 
$len = strlen($chars);
$pw = '';
 
for ($i=0;$i<$length;$i++)
        $pw .= substr($chars, rand(0, $len-1), 1);
 
// the finished password
$pw = str_shuffle($pw);



?>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" type="text" name="user_password"  id="randompassword" autocomplete="off" value="<?php echo $pw;?>">
										 </div>
                                    
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input class="form-control" type="text" name="confirm_password"  autocomplete="off" value="<?php echo $pw;?>">
										 </div>
                                    
                                        <div class="form-group">
                                            <label>Credit</label>
                                            <input class="form-control" value="0" type="text" name="user_credit"  value="0" readonly=readonly  autocomplete="off" >
										 </div>
                                    
             							 <div class="form-group">
                                            <label>Group </label>
                                          	<select class="form-control" name="user_group">
											<?php foreach($allgroups as $key => $group){ ?>
											<option value="<?php echo $group['gid']; ?>"><?php echo $group['group_name']; ?></option>
											<?php } ?>
											</select>
										 </div>
                         
        								 <div class="form-group">
                                            <label>Account type </label>
                                         <select class="form-control" name="account_type">
										<option value="0">User</option>
										<option value="1">Administrator</option>
										</select>
									    </div>
                                        <div class="form-group">
                                            <label>Notes</label>
                                            <textarea name="user_note"></textarea>
                                         </div>
                         
                                       <div class="form-group">
                                            <label> </label>
                             				<input type="submit" value="Submit" class="btn btn-default">
										 </div>
 

                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

<script type="text/javascript">
         
tinyMCE.init({
    
    mode : "textareas",
        theme : "advanced",
        relative_urls:false,
     plugins: "jbimages",
    
  // ===========================================
  // PUT PLUGIN'S BUTTON on the toolbar
  // ===========================================
    
 
    
        theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
        theme_advanced_buttons4 : "jbimages,insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
        
        
    });
 
</script>