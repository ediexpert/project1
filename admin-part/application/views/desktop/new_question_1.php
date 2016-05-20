<script type="text/javascript" src="<?php echo base_url();?>/js/basic.js"></script>
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <?php 
					if($resultstatus){ echo "<div class='alert alert-success'>".$resultstatus."</div>"; }
					 ?> 
                    <h2> Add Question</h2>
                    <hr>
                    >
                    <div class="col-lg-6 col-lg-offset-3">
                        <form method="post" action="<?php echo site_url('qbank/add_new_mul');?>" enctype="multipart/form-data">
                        	<div class="form-group">
                        		<label>Question Type</label>
                        		<select class="form-control"  name="qus_type" OnChange="get_ques_type(this.value)">
								<option value="0"> Multiple Choice -single answers</option>
								<option value="1" selected> Multiple Choice -multiple answers</option>
								<option value="2">Fill in the Blank</option>
								<option value="3">Short Answer</option>
								<option value="4">Essay</option>
								<option value="5">Matching</option>
								</select>
                        	</div>
							  <div class="form-group">
                                <label>Select Difficulty Level</label>
                             <select class="form-control" name="did">
							<?php foreach($difficult_level as $value){ ?>
							<option value="<?php echo $value->did; ?>"><?php echo $value->level_name; ?></option>
							<?php } ?></select> 

                             </div>
                            <div class="form-group">
                                <label> Question</label>
                                <input type="text" class="form-control" value="" required="" >
                            </div>


                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="form-group">
                                        <label> Option 1</label>
                                        <input type="text" class="form-control" value="" required="" >
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label> Points</label>
                                        <input type="text" class="form-control" value="" required="" >
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="form-group">
                                        <label> Option 2</label>
                                        <input type="text" class="form-control" value="" required="" >
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label> Points</label>
                                        <input type="text" class="form-control" value="" required="" >
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="form-group">
                                        <label> Option 3</label>
                                        <input type="text" class="form-control" value="" required="" >
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label> Points</label>
                                        <input type="text" class="form-control" value="" required="" >
                                    </div>
                                </div>

                            </div>

                            <?php $op="3"; ?>
							<?php
							if($this->input->post('add')){
							for($j=1; $j<=$this->input->post('add'); $j++){ 
							?>
							<div class="row">
								<div class="col-mlg-1">
									<input id="CheckBox[]" type="checkbox"  name="CheckBox[]" value="<?php echo $op-1; ?>" />
								</div>
                                <div class="col-lg-9">
                                    <div class="form-group">
                                        <label> Option 3</label>
                                        <input type="text" class="form-control" value="" required="" >
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label> Points</label>
                                        <input type="text" class="form-control" value="" required="" >
                                    </div>
                                </div>

                            </div>
							<?php
							$op++;
							}
							}
							?>
                            <div class="form-group">
                                <label> Media</label>
                                <input type="file" class="form-control" value=""  >
                            </div>
                            <div class="form-group">
                                <label> Select Topic</label>
                                <select class="form-control" name="topic_id">
                                    <?php foreach($category as $value){ ?>
									<option value="<?php echo $value->cid; ?>"><?php echo $value->category_name; ?></option>
									<?php } ?>
                                </select>
                                
                            </div>
                            
                            <div class="form-group">
                                <label> Password</label>
                                <input type="password" class="form-control" value=""  required="" autocomplete="off">
                            </div>
                            
                            <div class="form-group">
                                
                                <input type="checkbox" class="form-control" value="" required="" ><label> I Agree, I want to Add this Question</label>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-lrg" value="Add Question" >
                            </div>
                        </form>
                    </div>

                    
                        
                    
                </div>
            </div>
        </div>
    </header>

    