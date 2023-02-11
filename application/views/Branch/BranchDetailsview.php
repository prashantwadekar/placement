<style>
table{
  
  background: #f5f5f5
}

table {
  border: 2px #a39485 solid;
  font-size: 1.2em;
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
  background: #73685d;
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
                    <h1>Branch Details view</h1>
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
                                    <!-- <table class="display table table-striped table-bordered" id="example" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Student Name</th>
                                                <th>Mobile no</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                  
                             <tr>
                                <td>1</td>
                                <td>dffdf</td>
                                <td>fdfdf</td>
                             </tr>
                                          
                                        </tbody>
                                        
                                    </table-->

                                    <table>
    <thead>
    <tr>
        <th>Branch Name</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Establish Date</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Coforge</td>
        <td>Near R k Nagar</td>
        <td>(713) 123-8965</td>
        <td><a href="mailto:jmatman@stewart.com">coforgesolution@gmail.com</a></td>
        <td>01/13/1979</td>
    </tr>
    <tr>
        <td>Wipro</td>
        <td>Pimpri chinchvad,Pune</td>
        <td>(713) 584-9614</td>
        <td><a href="mailto:jsmith@stewart.com">wiproindiainfo@gmai.com</a></td>
        <td>06/09/1971</td>
    </tr>
    <tr>
        <td>Infosys</td>
        <td>Belgavi</td>
        <td>(713) 847-1124</td>
        <td><a href="mailto:sjohnson@stewart.com">Infisolutions@gmai.com</a></td>
        <td>08/25/1965</td>
    </tr>
    <tr>
        <td>TCS</td>
        <td>Dendeli,Pune</td>
        <td>(713) 245-4821</td>
        <td><a href="mailto:trichard@stewart.com">tatacomm@gmail.com</a></td>
        <td>03/13/1980</td>
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
                   
                       
               
            