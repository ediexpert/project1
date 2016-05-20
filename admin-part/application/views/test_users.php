
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    
                    <a href="<?php echo base_url();?>index.php/testing/adduser" class="btn btn-primary btn-lg"> Add New User</a>
                    <hr>
                    <table class="table table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Username</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                             <tr class="even gradeX">
                                <td>1</td>
                                <td>Imran M Bajwa</td>
                                <td>imranbajwa</td>
                                <td class="center">
                                    <button onclick="window.location.href='<?php echo base_url();?>index.php/testing/edituser';"class="btn-warning">Edit</button>
                                    <button class="btn-primary" data-toggle="modal" data-target="#password">Password</button>
                                    <button onclick="window.location.href='<?php echo base_url();?>index.php/testing/deluser';" class="btn-danger">Delete</button>
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
                                <td>Imran M Bajwa</td>
                                <td>imranbajwa</td>
                                <td class="center">
                                    <button onclick="window.location.href='<?php echo base_url();?>index.php/testing/edituser';"class="btn-warning">Edit</button>
                                    <button class="btn-primary" data-toggle="modal" data-target="#password">Password</button>
                                    <button onclick="window.location.href='<?php echo base_url();?>index.php/testing/deluser';" class="btn-danger">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    
                        
                    
                </div>
            </div>
        </div>
    </header>
