<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="Assets/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap3.min.css">
<style>
  
.fa-file-excel:before {
    content: "\f1c1";
    color: #1d6f42;
    font-size:18px;
}
.fa-file-pdf:before {
    content: "\f1c1";
    color: #f40f02;
    font-size:18px;
}
.fa-file-csv:before {
    content: "\f6dd";
    color:teal;
    font-size:18px;
}
.fa-copy:before, .fa-files-o:before {
    content: "\f0c5";
    color:rgba(86, 141, 229, 1);
    font-size:18px;
}.fa-print:before {
    content: "\f02f";
    color: black;
    font-size:19px;
}
.animtxt:hover{
  transform: scale(1.2);
}
.animimg:hover{
  transform: scale(1.05);
}

.buttons-excel {
  border:none;
  background-color: #ffffff;
  /* background-color:green; */
  color:#black;
  margin:0 auto;
  /* border:1px solid white; */
}
.buttons-copy {
 border:none;
 /* background-color:#BBDEF9; */
 background-color: #ffffff;
  color:white;
  margin:0 5;
  margin-left:25px;
  /* border:1px solid white; */
}
.buttons-pdf {
  background-color: #ffffff;
  border:none;
  /* background-color:#f40f02; */
  color:white;
  margin:0 auto;
  /* border:1px solid white; */
}
.buttons-csv {
  background-color: #ffffff;
  /* background-color: #445AD3; */
  border:none;
  color:white;
  /* border:1px solid white; */
  margin:0 5;
}
.buttons-excel {
  background-color: #ffffff;
  border:none;
  /* background-color: #1d6f42 ; */
  color:white;
  margin:0 5;
  /* border:1px solid white; */
}
.buttons-print {
  background-color: #ffffff;
  border:none;
  /* background-color:#36454F; */
  color:white;
  margin:0 5;
  /* border:1px solid white; */
}

.table.dataTable.display>tbody>tr.odd>.sorting_1, table.dataTable.order-column.stripe>tbody>tr.odd>.sorting_1 {
  box-shadow:inset 0 0 0 9999px rgb(0 0 0 / 2%)
}

.card-body {
    flex: 1 1 auto;
    padding: 1.25rem;
    margin-top: -20px;
}
.AddNew{
  /* border:1px solid #3f48CC; */
  border:none;
  color:#ffffff;
  font-size: 16px;
  float:right;
  background-color:#3f48CC;
  margin-top:14px;
}


.AddNew a{
  color:#ffffff;
}

.breadcrumb {
  background: transparent;
  justify-content: center;
  align-items: center;
  margin: -3px 0 1.25rem;

 }
.breadcrumb img{
  margin-top: -70px;
  margin-bottom: -45px;
  
}

  .breadcrumb h4 {
    margin-left:2px;
    margin-top: -20px;
    position: absolute;
    color: var(--white);
    text-align:center;
    font-family: Frozen;
    font-weight: 600;
    font-size: 1.4rem;
    line-height: 1;
     }
     .card {
    border-radius: 10px;
    box-shadow: 0 4px 20px 1px rgb(0 0 0 / 6%), 0 1px 4px rgb(0 0 0 / 8%);
    border: 0;
    margin: -16px;
}
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
  .AddNew{
    margin:4px 0px;
}

  }
    </style>
</head>
<body>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb mt-3">
                <img height="50px" width="280px" src="<?php echo base_url() ?>Assets\images\ribbon.png ">
                    <h4>Subcast Detail</h4>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class=" display nowrapdisplay table table-striped table-bordered" id="example" style="width:100%">
                                    <thead>
                                      <div class="addnewbutton">
                                      <!-- <a href="create"><i class="fas fa-plus-circle animtxt" aria-hidden="true"></i>&nbsp;Add New</a> -->
                                      <button type="button" class=" btn Addnew"><a href="create"><i class="fas fa-plus-circle animtxt" aria-hidden="true"></i>&nbsp;Add New</a></button>
                                      </div>
            <tr>
            <th>Action</th>
              <th>Sr.No</th>            
                <th>Subcast Name</th>
                <th>Relision</th>
                <th>Cast</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
            <td><i class="far fa-edit fa-lg"style="color:#1977D3;"></i><a  href="create" data-mdb-toggle="tooltip" title="edit">&nbsp;Edit</a></td>
              <td>01</td>
                
                <td>hgnm</td>
                <td>ghgjv,</td>
                <td>gylyh</td>
                
                <!-- <td>Data Syntist</td>
                <td>4.6-6.5 lacks</td> -->
                <!-- <td>Computer</td>
                <td>MSC</td>
                <td>Computer</td>
                <td>Computer</td>
                <td>First</td>
                <td>BSC</td>
                 <td>70%</td>       
                <td>MSC</td>
                <td>70%</td>
                <td>35281</td>
                <td>111235281</td> -->
                <!-- <td>111235281</td>
                <td>India</td>
                <td>Maharashtra</td>
                <td>Pune</td>
                <td>Human Resource</td>
                <td>Cricket</td>
                <td>Reading Books</td>
                <td>Pune</td>
                <td>NA</td>
                <td>NA</td> -->
            </tr>  
        </tbody>
        <!-- <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot> -->
    </table>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
                  

<script  src="<?php echo base_url(); ?>web_resources/dist/js/jquery.min.js"></script>
</body>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src=https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js></script> 
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script> 
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script> 
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script> 
 <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script> 
 <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap3.min.js"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable( { 
        
            
         responsive: true,
         dom: 'Bfrtip',
         dom: 'lBfrtip',
         buttons: [
           { extend: 'copy',text: '<i class="fa fa-copy animtxt" aria-hidden="true"></i>', className: 'buttons-copy' },
           { extend: 'csv',text: '<i class="fas fa-file-csv animtxt"  aria-hidden="true"></i> ', className: 'buttons-csv' },
           { extend: 'excel',text: '<i class="fa fa-file-excel animtxt" aria-hidden="true"></i>', className: 'buttons-excel' },
           { extend: 'pdf',text: '<i class="fa fa-file-pdf animtxt" aria-hidden="true"></i>', className: 'buttons-pdf' },
           { extend: 'print',text: '<i class="fa fa-print animtxt" aria-hidden="true"></i>', className: 'buttons-print' }
                ],
            initComplete: function() {
            var btns = $('.dt-button');
            btns.removeClass('dt-button');
        },
        
    } );
    
} );
</script>
<script>
</html>