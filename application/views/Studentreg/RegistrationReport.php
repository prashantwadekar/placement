<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="Assets/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap3.min.css">
<style>
  .modal-dialog {
    max-width: 1450px;
    margin: 2rem auto;
}

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
                    <h4>Student Report</h4>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class=" display nowrapdisplay table table-striped table-bordered" id="example" style="width:100%">
                                    <thead>	<!-- Button trigger modal -->
                                      <div class="addnewbutton">
                                      <!-- <a href="create"><i class="fas fa-plus-circle animtxt" aria-hidden="true"></i>&nbsp;Add New</a> -->
                                      <button type="button" class=" btn Addnew"><a href="create"><i class="fas fa-plus-circle animtxt" aria-hidden="true"></i>&nbsp;Add New</a></button>
                                      </div>
            <tr>
            <th>Sr.No</th>
            <th>Action</td>
              <th>Id</th>            
                <th>Full Name </th>
                <th>Email</th>         
                <th>Applied For</th>
                <th>Qualification</th>
                <th>Department</th>
                <th>Branch</th>        
                <th>Term</th>           
            </tr>
        </thead>     
    </table>

<!-- edit modal -->
<div class="modal fade" id="editModal" aria-hidden="true">
	  	<div class="modal-dialog" role="document" >
		    <div class="modal-content">
		      	<div class="modal-header">
		        	<h5 class="modal-title">Edit Record</h5>
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          		<span aria-hidden="true">&times;</span>
		        	</button>
		      	</div>
		      	<form id="editForm">
			      	<div class="modal-body">
			      		<input type="hidden" name="std_id" id="std_id">
		        		<div class="form-group">
						    <label>Fullname</label>
						    <input type="text" class="form-control" placeholder="Name here" name="std_fullname" id="std_fullname">
						</div>
						<div class="form-group">
						    <label>Email</label>
						    <input type="text" class="form-control" placeholder="email Here" name="std_email" id="std_email">
						</div>
						<div class="form-group">
						    <label>Appliedfor</label>
						    <input type="text" class="form-control" placeholder="appliedfor Here" name="std_appliedfor" id="std_appliedfor">
						</div>
            
            <div class="form-group">
						    <label>Qualification</label>
						    <input type="text" class="form-control" placeholder="qualification Here" name="std_qualification" id="std_qualification">
						</div>
            <div class="form-group">
						    <label>Department</label>
						    <input type="text" class="form-control" placeholder="department Here" name="std_department" id="std_department">
						</div>
            <div class="form-group">
						    <label>Branch</label>
						    <input type="text" class="form-control" placeholder="branch Here" name="std_branch" id="std_branch">
						</div>
            <div class="form-group">
						    <label>Term</label>
						    <input type="text" class="form-control" placeholder="Term Here" name="std_term" id="std_term">
						</div>
			      	</div>
			      	<div class="modal-footer">
			        	<button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
			        	<button type="submit" class="btn btn-primary">Update</button>
			      	</div>
			  	</form>
		    </div>
	  	</div>
	</div>

<!--edit modal end-->

    

    
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
 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable( { 

      "ajax" : "<?php echo base_url('Studentregistration/ReportfetchDatafromDatabase'); ?>",
				"order": [],      
         responsive: true,
         dom: 'Bfrtip',
         dom: 'lBfrtip',
         buttons: [
           { extend:'copy',text: '<i class="fa fa-copy animtxt" aria-hidden="true"></i>', className: 'buttons-copy' },
           { extend:'csv',text: '<i class="fas fa-file-csv animtxt"  aria-hidden="true"></i> ', className: 'buttons-csv' },
           { extend:'excel',text: '<i class="fa fa-file-excel animtxt" aria-hidden="true"></i>', className: 'buttons-excel' },
           { extend:'pdf',text: '<i class="fa fa-file-pdf animtxt" aria-hidden="true"></i>', className: 'buttons-pdf' },
           { extend:'print',text: '<i class="fa fa-print animtxt" aria-hidden="true"></i>', className: 'buttons-print'},
          //  { text: '<i class="fas fa-plus-circle animtxt" aria-hidden="true"></i><a href="#" id="shop">&nbsp;Add New</a>', className: 'Addnew' }
                ],
            initComplete: function() {
            var btns = $('.dt-button');
            btns.removeClass('dt-button');
        },
        
    } );  
} );
</script>


<script>

function PrintDiv() {    
   var table = $('#example').DataTable();
   var data = table.rows().data();

   var divToPrint = '<table border="1" style="width: 100%; border-collapse: collapse;text-align:center;">';
   divToPrint += '<thead><tr><th>ID</th><th>Full Name</th><th>Email</th><th>Applied For</th><th>Qualification</th><th>Department</th><th>Branch</th><th>Term</th></tr></thead>';
   divToPrint += '<tbody>';

   for (var i = 0; i < data.length; i++) {
      divToPrint += '<tr>';
      divToPrint += '<td>' + data[i][0] + '</td>';
      divToPrint += '<td>' + data[i][3] + '</td>';
      divToPrint += '<td>' + data[i][4] + '</td>';
      divToPrint += '<td>' + data[i][5] + '</td>';
      divToPrint += '<td>' + data[i][6] + '</td>';
      divToPrint += '<td>' + data[i][7] + '</td>';
      divToPrint += '<td>' + data[i][8] + '</td>';
      divToPrint += '<td>' + data[i][9] + '</td>';
      divToPrint += '</tr>';
   }

   divToPrint += '</tbody></table>';

   var popupWin = window.open('', '_blank', 'width=900,height=800');
   popupWin.document.open();
   popupWin.document.write('<html><body onload="window.print()">' + divToPrint + '</html>');
   popupWin.document.close();
}



    </script>

  <script>

function loadDatatableAjax(){
			$('#example').DataTable({
				"bDestroy" : true,
				"ajax" : "<?php echo base_url('Studentregistration/ReportfetchDatafromDatabase'); ?>",
				"initComplete" : function(){
					var notApplyFilterOnColumn = [4];
					var inputFilterOnColumn = [0];
					var showFilterBox = 'afterHeading'; //beforeHeading, afterHeading
					$('.gtp-dt-filter-row').remove();
					var theadSecondRow = '<tr class="gtp-dt-filter-row">';
					$(this).find('thead tr th').each(function(index){
						theadSecondRow += '<td class="gtp-dt-select-filter-' + index + '"></td>';
					});
					theadSecondRow += '</tr>';
				}
			});
		}
//edit function start here
		function editFun(std_id)
		{
			$.ajax({
				url: "<?php echo base_url('Studentregistration/getEditData'); ?>",
				method:"post",
        data:{std_id:std_id},
				dataType:"json",
				success:function(response)
				{
					$('#std_id').val(response.std_id);
					$('#std_fullname').val(response.std_fullname);
					$('#std_email').val(response.std_email);
					$('#std_appliedfor').val(response.std_appliedfor);
          $('#std_qualification').val(response.std_qualification);
					$('#std_department').val(response.std_department);
					$('#std_branch').val(response.std_branch);
					$('#std_term').val(response.std_term);
					$('#editModal').modal({
						backdrop:"static",
						keyboard:false
					});
				}
			})
		}


		$("#editForm").submit(function(event) {
			event.preventDefault();
			$.ajax({
	            url: "<?php echo base_url('Studentregistration/update'); ?>",
	            data: $("#editForm").serialize(),
	            type: "post",
	            async: false,
	            dataType: 'json',
	            success: function(response){
	              
	                $('#editModal').modal('hide');
	                $('#editForm')[0].reset();
	                if(response==1)
	                {
	                	alert('Successfully updated');
	                }
	                else{
	                	alert('Updation Failed !');
	                }
	               loadDatatableAjax();
	              },
	           error: function()
	           {
	            alert("error");
	           }
          });
		});

		//edit function work end here
    </script>
</html>