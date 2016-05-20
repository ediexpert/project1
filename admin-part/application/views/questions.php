
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <a href="<?php echo base_url();?>index.php/testing/addquest" class="btn btn-primary btn-lg"> Add MCMA Question </a>
                    <a href="<?php echo base_url();?>index.php/testing/addsaquest" class="btn btn-primary btn-lg"> Add Single Answer Question </a>
                    <a href="<?php echo base_url();?>index.php/testing/addmtquest" class="btn btn-primary btn-lg"> Add Multi Tasking Question </a>
                    <hr>
                    <h2>Questions Created </h2>
                    <table class="table table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Question</th>
                                <th class="text-center">Type</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                             <tr class="even gradeX">
                                <td>1</td>
                                <td>How are you feeling today?</td>
                                <td>MCMA</td>
                                <td class="center">
                                    <button class="btn-primary" data-toggle="modal" data-target="#question">View</button>
                                    <button onclick="window.location.href='<?php echo base_url();?>index.php/testing/delquest';" class="btn-danger">Delete</button>
                                </td>
                                <div class="modal fade" id="question" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content text-primary">
                                            <h2 class="text-primary">How are you Feeling Today</h2>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <fieldset>
                                                        <input type="checkbox" class="form-control"><label>Good</label> 
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-3">
                                                <fieldset>
                                                    <input type="checkbox" class="form-control"><label>Not Good</label> 
                                                </fieldset>
                                                </div>
                                                <div class="col-md-3">
                                                <fieldset>
                                                    <input type="checkbox" class="form-control"><label>Don't Know</label> 
                                                </fieldset>
                                                </div>
                                            </div>
                                      
                                    </div>
                                  </div>
                                </div>
                            </tr>
                            <tr class="even gradeX">
                                <td>2</td>
                                <td>What is 2+2 = ?</td>
                                <td>Single Answer</td>
                                <td class="center">
                                     <button class="btn-primary" data-toggle="modal" data-target="#question2">View</button>
                                    <button onclick="window.location.href='<?php echo base_url();?>index.php/testing/delquest';" class="btn-danger">Delete</button>
                                </td>
                                <div class="modal fade" id="question2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content text-primary">
                                            <h2 class="text-primary">What is 2+2 = ?</h2>
                                            <div class="row">
                                                <h3> Answer: 4 </h3>
                                            </div>
                                      
                                    </div>
                                  </div>
                                </div>
                            </tr>
                        </tbody>
                    </table>

                    
                        
                    
                </div>
            </div>
        </div>
    </header>
