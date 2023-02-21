
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Selected Student Details</h1>
                    
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="display table table-striped table-bordered" id="example" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Sr.no</th>
                                                <th>Action</th>
                                                <th>ID</th>
                                                <th>Full Name</th>
                                                <th>Email</th>
                                                <th>Applied For</th>
                                                <th>Qualification</th>
                                                <th>Department</th>
                                                <th>Branch</th>
                                                <th>Term</th>
                                              
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <!-- <?php 
                                 $i=0;
                                foreach($data as $rw=>$value){
                                 echo "<tr>";
                                //   echo  '<td><a href="'.base_url().'Registration/update/'.$value->memberId.'"><i class="fas fa-eye" style="font-size: 16px;"></i></a> 
                                //   </td>';
                                
                                 echo "<td>".$value->id."</td>";
                                 echo "<td>".$value->std_name."</td>";$i++;
                                 echo "<td>".$value->std_fullname."</td>";
                                //  echo "<td>".$value->subject."</td>";
             
                              ;
                                 echo "</tr>";                        
                             }
                             ?>  -->
                                          
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
                  

<script  src="<?php echo base_url(); ?>web_resources/dist/js/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>


    <script>
$(document).ready(function() {
    $('#example').DataTable( { 

      "ajax" : "<?php echo base_url('Studentregistration/VerifyfetchDatafromDatabase'); ?>",
				"order": [],      
         responsive: true,
         dom: 'Bfrtip',
         dom: 'lBfrtip',
            initComplete: function() {
            var btns = $('.dt-button');
            btns.removeClass('dt-button');
        },
        
    } );  
} );
</script>
                   
                       
               
            