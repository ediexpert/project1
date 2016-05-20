
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <h2>Results</h2>
                    <table class="table table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Username</th>
                                <th class="text-center">Score</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                             <tr class="even gradeX">
                                <td>1</td>
                                <td>imranbajwa</td>
                                <td>99</td>
                                <td class="center">
                                    <button onclick="window.location.href='<?php echo base_url();?>index.php/testing/viewresult';" class="btn-danger">View</button>
                                </td>
                                
                            </tr>
                            <tr class="even gradeX">
                                <td>2</td>
                                <td>joe Kukai</td>
                                <td>65</td>
                                <td class="center">
                                     <button onclick="window.location.href='<?php echo base_url();?>index.php/testing/viewresult';" class="btn-danger">View</button>
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
