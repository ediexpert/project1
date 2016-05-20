
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <a href="<?php echo base_url();?>index.php/testing/addcategory" class="btn btn-primary btn-lg"> Add New Category </a>
                    <hr>
                    <h2>Catagories Created </h2>
                    <table class="table table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Category Name</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                             <tr class="even gradeX">
                                <td>1</td>
                                <td>Category 1</td>
                                <td class="center">
                                    <button onclick="window.location.href='<?php echo base_url();?>index.php/testing/delcategory';" class="btn-danger">Delete</button>
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
                            <tr class="even gradeX">
                                <td>2</td>
                                <td>Category 2</td>
                                <td class="center">
                                    <button onclick="window.location.href='<?php echo base_url();?>index.php/testing/delcategory';" class="btn-danger">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    
                        
                    
                </div>
            </div>
        </div>
    </header>
