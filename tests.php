
        <div class="container">
            <div class="row">
                <?php if(isset($resultstatus)){?>

                <div class="alert alert-warning alert-dismissible fade in" role="alert"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button> 
                    <strong></strong> <?=$resultstatus?> 
                </div>
                <?php } ?>
                <div class="col-lg-12">
                    <a href="" class="btn btn-primary btn-lg"> Add New Test </a>
                    <?php /*<a href="<?php echo base_url();?>index.php/testing/categories" class="btn btn-primary btn-lg"> Category </a>*/?>
                    <a href="" class="btn btn-primary btn-lg"> Topic </a>
                    <a href="" class="btn btn-primary btn-lg"> Question </a>
                    <hr>
                    <h2>Tests(Categories) Created </h2>
                    <table class="table table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Test Name</th>
                                <th class="text-center">Topics Included</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                            
                             <tr class="even gradeX">
                                <td>asas</td>
                                <td>sadas</td>
                                <td>asa</td>
                                <td class="center">
                                    <button class="btn-warning">Edit</button>
                                    
                                    <button  class="btn-danger">Delete</button>
                                </td>
                                <div class="modal fade" id="password" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                  <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                            <h2 class="text-primary">User Password:</h2>
                                      <h1 class="text-danger" >X52zff$14#</h1>
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
