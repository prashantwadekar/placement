<style>


table {
  border: 1px #a39485 solid;
  font-size: .9em;
  box-shadow: 0 2px 5px rgba(0,0,0,.25);
  width: 100%;
  border-collapse: collapse;
  border-radius: 5px;
  overflow: hidden;
}

th {
  text-align: left;
}
  
thead {
  font-weight: bold;
  color: #fff;
  background: #445AD3;
}
  
 td, th {
  padding: 1em .5em;
  vertical-align: middle;
}
  
 td {
  border-bottom: 1px solid rgba(0,0,0,.1);
  background: #fff;
}

a {
  color: #73685d;
}
  
 @media all and (max-width: 768px) {
    
  table, thead, tbody, th, td, tr {
    display: block;
  }
  
  th {
    text-align: right;
  }
  
  table {
    position: relative; 
    padding-bottom: 0;
    border: none;
    box-shadow: 0 0 10px rgba(0,0,0,.2);
  }
  
  thead {
    float: left;
    white-space: nowrap;
  }
  
  tbody {
    overflow-x: auto;
    overflow-y: hidden;
    position: relative;
    white-space: nowrap;
  }
  
  tr {
    display: inline-block;
    vertical-align: top;
  }
  
  th {
    border-bottom: 1px solid #a39485;
  }
  
  td {
    border-bottom: 1px solid #e5e5e5;
  }
  
  
  }
    </style>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Basic</h1>
                    <ul>
                        <li><a href="href.html">Form</a></li>
                        <li>Basic</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title mb-3">Form Inputs</div>
                                <div class="table-responsive">
                                    <table class="display table table-striped table-bordered" id="example" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Student Name</th>
                                                <th>Mobile no</th>
                                                
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
                                 echo "<td>".$value->studentname."</td>";$i++;
                                 echo "<td>".$value->phone."</td>";
                                //  echo "<td>".$value->subject."</td>";
             
                              ;
                                 echo "</tr>";                        
                             }
                             ?>  -->
                             <tr>
                                <td>1</td>
                                <td>dffdf</td>
                                <td>fdfdf</td>
                             </tr>
                                          
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
   

    $('#example').dataTable();
 
    
} );
</script>
                   
                       
               
            